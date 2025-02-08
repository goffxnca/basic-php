<?php

function display_counter()
{
    static $counter = 0;
    $counter++;
    echo $counter;
}

display_counter(); // 1
display_counter(); // 2
display_counter(); // 3

echo $counter;
