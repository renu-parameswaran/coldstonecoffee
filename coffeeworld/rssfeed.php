<?php
$ch = curl_init();

/**
* Set the URL of the page or file to download.
*/
curl_setopt($ch, CURLOPT_URL, "http://news.google.com/news?hl=en&topic=t& output=rss");

/**
* Ask cURL to return the contents in a variable instead of simply echoing them to the browser.
*/
$fp = fopen("rss.xml", "w");

/**
* Ask cURL to write the contents to a file
*/
curl_setopt($ch, CURLOPT_FILE, $fp);

/**
* Execute the cURL session
*/
curl_exec ($ch);

/**
* Close cURL session and file
*/
curl_close ($ch);
fclose($fp);
?>