<?php
class Person {
    public $name;
    public $age;
}

$person = new Person();
$person->name = 'Alice';
$person->age = 25;
$person->cashOnhand = 10.5;

$Name = 'Brad';
$Age = 40;
$hasKids = 'true';
$cashOnhand = 10.5;

define("CONSTANT_NAME", "constant_value");
define('HOST', 'localhost');
define('USER', 'root');
define('PI', '3.1416');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Sets</title>
</head>
<body>
    <h2>Question 1: What is the output of <code>print_r($person, true);</code>?</h2>
    <h3>Answer:
    <pre><?php echo print_r($person, true); ?></pre></h3>

    <h2>Question 2: What is the output of <code>var_dump($person);</code>?</h2>
    <h3>Answer:
    <pre><?php var_dump($person); ?></pre></h3>

    <h2>Question 3: What is the output of <code>var_dump($cashOnhand);</code>?</h2>
    <h3>Answer:
    <pre><?php var_dump($cashOnhand); ?></pre></h3>

    <h2>Question 4: What character is used to concatenate strings?</h2>
    <h3>
    <pre><?php echo "$Name is $Age years old";
               echo "${Name} is ${Age} years old";
               echo '<h3>' . $Name . 'is' . $Age . 'years old</h3>';
    ?></pre></h3>
    <h3>Answer: "." / dot</h3>

    <h2>Question 5: What is the output of <code>echo HOST?</code>?</h2>
    <h3>Answer:
    <pre><?php echo HOST; ?></pre></h3>

    <h2>Question 6: How do you define in PHP the variable PI with value 3.1416?</code>?</h2>
    <h3>Answer:
    <pre><?php echo PI; ?></pre></h3>
</body>
</html>
