<?php
// Check if a file path is provided as a command-line argument
if ($argc > 1) {
    $file_path = $argv[1];
} else {
    // If no argument is provided, ask the user for the file path
    echo "Enter the path to the file: ";
    $file_path = trim(fgets(STDIN));
}

// Check if the file exists
if (!file_exists($file_path)) {
    echo "File not found: $file_path\n";
    exit(1);
}

// Create a FileInfo object
$finfo = finfo_open(FILEINFO_MIME_TYPE);

// Get the MIME type of the file
$mime_type = finfo_file($finfo, $file_path);

// Close the FileInfo object
finfo_close($finfo);

// Output the MIME type
echo "The MIME type of the file is: $mime_type\n";