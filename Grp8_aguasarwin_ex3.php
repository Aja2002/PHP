<?php
$filePath = 'group8.txt';

if (file_exists($filePath)) {
    $content = file_get_contents($filePath);
    echo "Current Content of the file:\n";
    echo $content . "\n";
    
    $lines = file($filePath);
    echo "\nContent as an array:\n";
    print_r($lines);

    $newContent = "\nThis is a new line added to the file.";
    file_put_contents($filePath, $newContent, FILE_APPEND);
    echo "\nNew content has been appended to the file.\n";
} else {
    $initialContent = "This is group8\n";
    file_put_contents($filePath, $initialContent);
    echo "File created this is group8.\n";
}
?>
