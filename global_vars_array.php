<?php
$name = "John";
$age = 20;

function show_name()
{
    echo $GLOBALS['name'];
}

show_name();

echo json_encode($GLOBALS);
