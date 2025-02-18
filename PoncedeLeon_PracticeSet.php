<?php
class Person {
    public $name;
    public $age;
}

$person = new Person();
$person->name = 'Alice';
$person->age = 25;
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
</body>
</html>
