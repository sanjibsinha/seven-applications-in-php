<?php

echo '<pre><h1>How to parse .ini file</h1>';

$filename = "sample.ini";
$array = parse_ini_file($filename);
foreach ($array as $key => $value) {
    echo "<pre> {$key} = {$value} <br>";
}

