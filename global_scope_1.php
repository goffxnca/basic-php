<?php


$name = "john"; //Global scope
echo "My name: $name is available outside <br>";
echo "My age: $age is NOT available outside <br>"; //Error local var in fn is not available here

function show_name()
{
    $age = 22; //Local scope
    echo "My age is $age"; // Good
    echo "My name is $name"; // Error global var is not available in fn
}

show_name();
