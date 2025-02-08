<h1>Title (H1)</h1>
<br>
<?php
echo "Echo text inside php tag";
echo "<br>";
echo "1+1=";
echo 1 + 1
?>
<br>
<h2>Sub Title (H2 - Raw HTML)</h2>
<ul>
    <li>1</li>
    <li>2</li>
</ul>

<?php
echo "New </br> line with br";
print "<br>Print command also work";
echo ("<h2>Subtitle (H2 - HTML in string in PHP tag) </h2>");
echo "<br>", "5", "+", "10", "=", 5 + 10, " In comma-separated echo";
echo ("<br>Echo call as function");
$print_result = print "PHP";
echo "<br>Return value of print command is:", $print_result, "<br>";
$days = 365;
echo "1 Year has $days days (Interpolation)<br>";
echo $days . "days" . "is" . 1 . "year" . "(Concatination)";
echo "<br>Date Y-M-D: ", date("Y-M-D");
echo "<br>Date Y-m-d: ", date("Y-m-d");
echo "<br>Date y-m-d: ", date("y-m-d");
echo "<br>Date D-M-Y: ", date("D-M-Y");
echo "<br>Date D/M/Y: ", date("D/M/Y");
echo "<br>Date DMY: ", date("DMY");
echo "<br>Date DMY: ", date("DMY");
echo "<br>Date Y-M-D h:m:s ", date("Y-M-D h:m:s");
?>


----
<br>
<?php
echo '<br>Wrap with single quote so i can show double quote " see?';
echo "<br>Wrap with double quote and show single quote ' see?";
echo "<br>Wrap with double quote and use\ to escape quote \"";
echo '<br>Wrap with single quote and use\ to escape quote \'';
echo "<br>";
echo <<<block
<p>paragraph</>
<h3>This is H3 />
<ol><li>one</li><li>two</li></ol>
block;
?>


<?php
echo "<script>console.log('javascript inside php block')</script>"
?>

<?php
$name = "john";
echo "<script>console.log('$name')</script>"
?>

<br>
<?php
$car = ["name" => "Honda", "year" => 2020];
echo json_encode($car);
echo "<br>";
print_r($car);
echo "<br>Car is: ", $car["name"]
?>

<br>
<?php
$person = ["name" => "john", "age" => 30];
$json = json_encode($person, JSON_PRETTY_PRINT);
echo "<pre>$json</pre>"
?>

<br>

<?php
$product = ["name" => "milk", "price" => 50];
echo "Milk Price: ", $product["price"], "<br>"
?>
<script>
    const jsonProduct = <?php echo json_encode($product) ?>;
    console.log(jsonProduct.name)
</script>

Class in PHP
<?php
class Car
{
    public $brand = "toyota";
    public $year = 2021;
}
?>

<?php
$newCar = new Car();
echo $newCar->brand
?>