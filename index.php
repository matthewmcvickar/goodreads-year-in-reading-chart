<?php

require_once('api-settings.php');

// Query the Goodreads API.
// $books = simplexml_load_file('https://www.goodreads.com/review/list?format=xml&v=2&id=3519627&shelf=read&key=' . API_KEY);

// Read local copy while developing.
$books = simplexml_load_file('test-data.xml');

echo "<pre>";
print_r($books);
echo "</pre>";

?>