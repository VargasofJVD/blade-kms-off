<?php
// Simple test to check if images are accessible
echo "<h1>Image Test Page</h1>";

$storagePath = __DIR__ . '/storage/news/';
$publicPath = '/storage/news/';

echo "<h2>Storage Directory: $storagePath</h2>";

if (is_dir($storagePath)) {
    $files = scandir($storagePath);
    echo "<h3>Files in storage/news:</h3>";
    echo "<ul>";
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            $fullPath = $storagePath . $file;
            $publicUrl = $publicPath . $file;
            $fileSize = filesize($fullPath);
            echo "<li>";
            echo "<strong>$file</strong> (Size: " . number_format($fileSize) . " bytes)<br>";
            echo "<img src='$publicUrl' style='max-width: 200px; height: auto; border: 1px solid #ccc;' alt='$file'><br>";
            echo "URL: <a href='$publicUrl' target='_blank'>$publicUrl</a>";
            echo "</li>";
        }
    }
    echo "</ul>";
} else {
    echo "<p>Storage directory not found!</p>";
}

echo "<h2>PHP Info for Debugging:</h2>";
echo "<p>Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
echo "<p>Script Path: " . __FILE__ . "</p>";
echo "<p>Current Directory: " . getcwd() . "</p>";
?>
