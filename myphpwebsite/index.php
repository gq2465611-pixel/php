<?php
echo "<h2>1. Hello PHP</h2>";
echo "Hello, PHP!";
echo "<hr>";


// 2. Add two numbers
echo "<h2>2. Add Two Numbers</h2>";
$a = 10;
$b = 5;
echo "Sum = " . ($a + $b);
echo "<hr>";


// 3. Positive, Negative, Zero
echo "<h2>3. Check Number</h2>";
$num = 3;

if ($num > 0) {
    echo "Positive";
} elseif ($num < 0) {
    echo "Negative";
} else {
    echo "Zero";
}
echo "<hr>";


// 4. Reverse a string
echo "<h2>4. Reverse String</h2>";
$str = "Hello World";
echo strrev($str);
echo "<hr>";


// 5. Count words
echo "<h2>5. Word Count</h2>";
$text = "PHP is very easy to learn";
echo "Words: " . str_word_count($text);
echo "<hr>";


// 6. Fruits array loop
echo "<h2>6. Fruits List</h2>";
$fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<hr>";


// 7. Prime number check
echo "<h2>7. Prime Check</h2>";
$num = 17;
$isPrime = true;

if ($num <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

echo $isPrime ? "$num is Prime" : "$num is Not Prime";
echo "<hr>";


// 8. Function to square a number
echo "<h2>8. Square Function</h2>";
function square($n) {
    return $n * $n;
}

echo "Square of 5 = " . square(5);
echo "<hr>";


// 9. Sort array
echo "<h2>9. Sort Array</h2>";
$arr = [5, 2, 9, 1, 7];

sort($arr);

foreach ($arr as $value) {
    echo $value . " ";
}
echo "<hr>";


// 10. Read text file
echo "<h2>10. Read File</h2>";
// Make sure data.txt exists in same folder
if (file_exists("data.txt")) {
    echo nl2br(file_get_contents("data.txt"));
} else {
    echo "data.txt file not found!";
}

?>