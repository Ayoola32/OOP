<?php
// MAGIC KEYWORD

echo __FILE__ . "<br>"; // Gives the file path directory including the file name at the end

echo __LINE__ . "<br>"; // This particulat line of code location which is line 4

echo __DIR__ . "<br>"; //// Gives the file path directory without file name at the end

if(file_exists(__DIR__)){
    echo "Yes, it exists <br>";
};

if(is_file(__DIR__)){
    echo "Yes, it exists <br>";
}else {
    echo "No, it is not";
};




?>