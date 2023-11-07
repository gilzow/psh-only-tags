<?php
$version = "unknown";
if (is_file(dirname(__DIR__).DIRECTORY_SEPARATOR.'tag-tracker.txt')) {
    $version = file_get_contents(dirname(__DIR__).DIRECTORY_SEPARATOR.'tag-tracker.txt');
}

printf("<p>Current tag version is: %s</p>", $version);
