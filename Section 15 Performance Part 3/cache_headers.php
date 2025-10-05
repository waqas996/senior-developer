<?php

// Set cache-control headers (public cache for 5 seconds)
header('Cache-Control: public, max-age=5');

// Generate ETag (based on file content or dynamic data)
$content = "hiii";
$etag = md5($content);

// Check if the client's copy is still valid
/*if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && trim($_SERVER['HTTP_IF_NONE_MATCH']) === $etag) {
    header('HTTP/1.1 304 Not Modified');
    exit;
}*/

// ETag validation
if (isset($_SERVER['HTTP_IF_NONE_MATCH']) &&
    trim($_SERVER['HTTP_IF_NONE_MATCH']) == '"' . $etag . '"') {
    http_response_code(304);
    exit;
}

// Send the ETag header
header("ETag: \"$etag\"");

// Output the content
echo $content;
;
