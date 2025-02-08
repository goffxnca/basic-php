<?php
$name = "John";

function show_name()
{
    global $name;
    echo "Local: Name is $name <br>";
    $name = "John Doe";
}


echo "Global: Name before $name <br>";

show_name();

echo "Global: Name after $name <br>";
