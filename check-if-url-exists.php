<?php

// Url to test
$url = "https://paulknisely.com";

// Use get_headers() function to test if url exists
$headers = get_headers($url);

// If url exists echo statement, else echo another statement
if($headers && strpos($headers[0], '200')) echo "Url exists";
else echo "Url does not exist";
