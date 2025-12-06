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

<!-- yaha pe string ke function hai -->
<?php

echo "1. strlen() \n";
echo strlen("Hello"); 
// Output: 5
echo "\n\n";

echo "2. str_word_count() \n";
echo str_word_count("Hello world"); 
// Output: 2
echo "\n\n";

echo "3. strrev() \n";
echo strrev("Hello"); 
// Output: olleH
echo "\n\n";

echo "4. strtolower() \n";
echo strtolower("HeLLo"); 
// Output: hello
echo "\n\n";

echo "5. strtoupper() \n";
echo strtoupper("HeLLo"); 
// Output: HELLO
echo "\n\n";

echo "6. ucfirst() \n";
echo ucfirst("hello world"); 
// Output: Hello world
echo "\n\n";

echo "7. ucwords() \n";
echo ucwords("hello world"); 
// Output: Hello World
echo "\n\n";

echo "8. trim() \n";
echo trim("   Hello   "); 
// Output: Hello
echo "\n\n";

echo "9. ltrim() \n";
echo ltrim("   Hello"); 
// Output: Hello
echo "\n\n";

echo "10. rtrim() \n";
echo rtrim("Hello   "); 
// Output: Hello
echo "\n\n";

echo "11. explode() \n";
print_r(explode(" ", "Hello World"));
// Output: Array ( [0] => Hello [1] => World )
echo "\n\n";

echo "12. implode() \n";
echo implode("-", ["a", "b", "c"]); 
// Output: a-b-c
echo "\n\n";

echo "13. strpos() \n";
echo strpos("hello world", "world"); 
// Output: 6
echo "\n\n";

echo "14. str_replace() \n";
echo str_replace("world", "PHP", "Hello world"); 
// Output: Hello PHP
echo "\n\n";

echo "15. substr() \n";
echo substr("Hello World", 0, 5); 
// Output: Hello
echo "\n\n";

echo "16. strcmp() \n";
echo strcmp("a", "b"); 
// Output: -1 (means a < b)
echo "\n\n";

echo "17. nl2br() \n";
echo nl2br("Hello\nWorld"); 
// Output:
// Hello
// World
echo "\n\n";

echo "18. htmlspecialchars() \n";
echo htmlspecialchars("<b>Hello</b>"); 
// Output: &lt;b&gt;Hello&lt;/b&gt;
echo "\n\n";

echo "19. addslashes() \n";
echo addslashes("John's Book"); 
// Output: John\'s Book
echo "\n\n";

echo "20. md5() \n";
echo md5("password"); 
// Output: 5f4dcc3b5aa765d61d8327deb882cf99
echo "\n\n";

?>

<!-- boolean datatype -->

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
 <?php 
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$merged = array_merge($array1, $array2);
print_r($merged);  // Outputs: [1, 2, 3, 4, 5, 6]
?>

<?php 
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$merged = array_merge($array1, $array2);
print_r($merged);  // Outputs: [1, 2, 3, 4, 5, 6]
?>

<?php 
$numbers = [3, 1, 4, 1, 5];
sort($numbers);
print_r($numbers);  // Outputs: [1, 1, 3, 4, 5]

?>


<!-- array iteration in php -->
<!-- for loop  -->
<?php 
$arr = [1, 2, 3, 4, 5]; 
$length = count($arr); 

for ($i = 0; $i < $length; $i++) { 
    echo $arr[$i] . ' '; 
} 
?>


<!-- for each  -->
<?php 
$arr = [1, 2, 3, 4, 5]; 

foreach ($arr as $val) { 
    echo $val . ' '; 
} 
?>



<?php 
echo "hello world";
?>




