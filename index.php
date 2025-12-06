<?php 
echo "hello world";
print "hello radha";  //ye v chalega
?>
<?php
$age=20;
echo $age;
?>

<?php
$price=.22222;
echo $price;
?>
<?php
$name="sagar";
echo $name;
?>

<?php 
$greeting="hello";
echo "Message:$greeting\n";
echo 'message:$greeting';
?>

<?php 
$input =<<<testHeredoc
i am a sagar.
i am a good boy;
i am rich.
testHeredoc;
echo $input
?>


<?php
$input = <<<'testNowdoc'
Welcome to GeeksforGeeks.
Started content writing in GeeksforGeeks!.
testNowdoc;
echo $input;

// Directly printing string 
// without any variable
echo <<<'Nowdoc'
Welcome to GFG .
Learning PHP is fun in GFG.
Nowdoc;
?>

<!-- yaha pe string ke method sab chhut gya h -->







<?php
$isActive = true;
if ($isActive) {
    echo "Active";
}
?>

<!-- compound datatypes -->
<!-- array -->
<?php
$colors = ["red","blue", "green"];
echo $colors[1];
?>

<!-- types of arrays -->
 <!-- 1. indexed array -->
  <?php
   $fruits = array("apple", "banana", "cherry");
echo $fruits[0]; // Outputs: apple
?>
<?php
   $fruits = array(0 => "apple", 1 => "banana", 2 => "cherry");
echo $fruits[1]; // Outputs: banana
?>


<!-- 2. Associative array -->
 <?php
    $person = array("name" => "GFG", "age" => 30, "city" => "New York");
echo $person["name"]; 
?>

<!-- 3. Multidimensional array -->
 <?php
    $students = array(
    "Anjali" => array("age" => 25, "grade" => "A"),
    "GFG" => array("age" => 22, "grade" => "B")
);
echo $students["GFG"]["age"]; 
?>

<!-- adding and removing array items  -->
<?php

// --------------------
// Adding Array Elements
// --------------------
echo "<h3>Adding Array Elements</h3>";

$fruits = ["apple", "banana"];
echo "Original Array: ";
print_r($fruits);

// 1. array_push() – Add at end
array_push($fruits, "cherry");
echo "<br>After array_push('cherry'): ";
print_r($fruits);

// 2. array_unshift() – Add at beginning
array_unshift($fruits, "pear");
echo "<br>After array_unshift('pear'): ";
print_r($fruits);

// 3. Direct assignment – Associative array
$person = ["name" => "John"];
$person["city"] = "New York";
echo "<br><br>Associative Array: ";
print_r($person);


// --------------------
// Removing Array Elements
// --------------------
echo "<h3>Removing Array Elements</h3>";

$fruits = ["apple", "banana", "cherry", "mango"];
echo "Original Array: ";
print_r($fruits);

// 1. array_pop() – Remove last element
array_pop($fruits);
echo "<br>After array_pop(): ";
print_r($fruits);

// 2. array_shift() – Remove first element
array_shift($fruits);
echo "<br>After array_shift(): ";
print_r($fruits);

// 3. unset() – Remove specific index
unset($fruits[1]); // remove element at index 1
echo "<br>After unset(\$fruits[1]): ";
print_r($fruits);
?>




<!-- ab array ke function ka naam -->

<!-- array iteration in php -->

<?php 
$arr = [1, 2, 3, 4, 5]; 
$length = count($arr); 

for ($i = 0; $i < $length; $i++) { 
    echo $arr[$i] . ' '; 
} 
?>





