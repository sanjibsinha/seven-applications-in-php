<?php

$filename = "file.txt";
if (file_exists($filename)){
    $data = file($filename);
    foreach ($data as $key => $value) {
        echo '<pre>';
        echo "Line number : {$key} : " . $value . "<br>";
        echo "The file size is " . filesize($filename) . " bytes long.";
    }
}
else{
    throw new Exception($filename . " does not exist");
}
?>
<?php

echo '<h1>The binary read option</h1>';

$handle = fopen($filename, "rb");

$text = fread($handle, filesize($filename));

$full_text = str_replace("\n", "<br>", $text);

echo "<pre>" . $full_text . "<br>";

fclose($handle);

echo '<h1>Parsing files with fscanf</h1>';

$handle1 = fopen($filename, "r");
while ($file = fscanf($handle1, "%s\t%s\n")) {
    list($word1, $word2) = $file;    
    echo $word1, " ", $word2, "<br>";
}
fclose($handle1);



