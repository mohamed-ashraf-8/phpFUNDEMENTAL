Q1<br>
<?php

class product
{
    public $id;
    public $name;
    public $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function DisplayInfo()
    {
        echo "Product ID: " . $this->id . "<br>";
        echo "Product Name: " . $this->name . "<br>";
        echo "Product Price: $" . $this->price . "<br>";
    }
}

$product1 = new Product(001, "Product 1", 100);
$product2 = new Product(002, "Product 2", 200);
$product3 = new Product(003, "Product 3", 300);
$product4 = new Product(004, "Product 4", 400);

$products = [$product1, $product2, $product3, $product4];

$totalPrice = 0;
foreach ($products as $product) {
    $totalPrice += $product->price;
}

foreach ($products as $product) {
    $product->displayInfo();
}

$numOfProducts = count($products);
echo "Number of Products: " . $numOfProducts . "<br>";
echo "Total Price: $" . $totalPrice . "<br>";
?>
<br>
Q2
<br>
<?php

function Anagram($str1, $str2)
{
    if (strlen($str1) !== strlen($str2)) {
        return false;
    }

    $sortedStr1 = str_split($str1);
    sort($sortedStr1);
    $sortedStr2 = str_split($str2);
    sort($sortedStr2);
    return $sortedStr1 === $sortedStr2;
}

$string1 = "listen";
$string2 = "silent";

if (Anagram($string1, $string2)) {
    echo "The strings '$string1' and '$string2' are anagrams.";
} else {
    echo "The strings '$string1' and '$string2' are not anagrams.";
}
?>

<br>
<br>
Q3
<br>
<?php
function Palindrome($str)
{
    $reverseStr = strrev($str);
    return $str == $reverseStr;
}

$string = "eye";

if (Palindrome($string)) {
    echo "The string '$string' is a palindrome.";
} else {
    echo "The string '$string' is not a palindrome.";
}
?>

<br>
<br>
Q5
<br>
<?php

trait Trait1
{
    public function methodA() {}
}

trait Trait2 
{
    public function methodB() {}
}

class MyClass 
{
    use Trait1, Trait2;
}

$obj = new MyClass();
$obj->methodA(); 
$obj->methodB(); 
?>