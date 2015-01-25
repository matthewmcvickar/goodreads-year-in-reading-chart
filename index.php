<?php

require_once('api-settings.php');

$books = simplexml_load_file('https://www.goodreads.com/review/list?format=xml&v=2&id=3519627&shelf=read&key=' . API_KEY);

echo "<pre>";
print_r($books);
echo "</pre>";

?>