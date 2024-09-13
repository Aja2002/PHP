<?php
$filename = "data.txt";

if (file_exists($filename)) {
    echo "File '$filename' exists.<br>";

    $contents = file_get_contents($filename);
    echo "Contents of the file:<br>" . nl2br($contents) . "<br>";

    $new_content = "Additional data written to the file.\n";
    file_put_contents($filename, $new_content, FILE_APPEND);
    echo "New content appended to the file.<br>";

    $file_array = file($filename);
    echo "File contents as an array:<br>";
    foreach ($file_array as $line_number => $line_content) {
        echo "Line " . ($line_number + 1) . ": " . nl2br($line_content) . "<br>";
    }
} else {
    echo "File '$filename' does not exist.<br>";

    $initial_content = "Initial content written to the file.\n";
    file_put_contents($filename, $initial_content);
    echo "File '$filename' created and initial content written.<br>";
}
?>
