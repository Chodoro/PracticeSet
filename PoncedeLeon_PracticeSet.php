<?php
    Class Person{
        public $name;
        public $age;
    }
    
    $person = new Person();
    $person ->name = 'Alice';
    $person ->age = 25;
    
    print_r($person);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Sets</title>
</head>
<body>
    <h1>Question 1: What is the output of "echo print_r($person);"?</h1>
    <h2>Answer: 
        Person Object
    (
        [name] => Alice
        [age] => 25
    )
    </h2>
    
</body>
</html>