<?php
spl_autoload_register('autoLoader');

function autoLoader($class_name)
{
    // Define possible paths
    $paths = [
        "./models/",
        "../models/"
    ];

    // Define the file extension
    $extension = "_model.php";

    // Iterate through paths to find the file
    foreach ($paths as $path) {
        $full_path = $path . $class_name . $extension;

        // Check if the file exists
        if (file_exists($full_path)) {
            include_once $full_path;
            return;
        }
    }

    // If no file is found, trigger an error
    throw new Exception("The class file for '{$class_name}' could not be found.");
}
