<?php

echo "Goff";
echo ("Goff"); // same


echo "<h1>PHP is fun</h1>"; // echo html tag
echo "Hello World<br>"; // echo string and html tag
echo "this ", "string ", "is ", "made ", "from ", "multiple ", "params", "<br>"; //multiple strings params

#Display vars
$name = "john";
echo "My name is $name <br>"; // and can be interpolate like this with double quote
echo 'My name is $name <br>'; // with single quote, interpolation is not allowed
echo 'My name is ' . $name . "<br>"; // and use like this instead



#Prints
print "My name is $name";
print("<h1>Hello</h1> world <br>");

// print "this", "is"; // Not allow multiple like this


echo print("print test and return:"); // print test and return:1
