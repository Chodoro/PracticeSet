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

$numbers = [1, 2, 3, 4, 5];

$colors = ["red", "green", "blue"];

$Colors = [1=> 'red', 2=> 'green', 3=> 'blue'];

$hex = ['red' => '#f00', 'green' => '#0f0', 'blue' => '#00f'];

$matrix = [[1,2,3], [4,5,6], [7,8,9]];

$person1 = ['first_name' => 'Maeve', 'last_name' => 'Reid', 'emai;' => 'reid@gmail.com'];

$people = [
    $person1,
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@gmail.com'
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@gmail.com'
    ],
];

$fruits = ['kiwi', 'apple, banana', 'orange', 'grape', 'mango', 'raspberry'];
$chunkedArray = array_chunk($fruits, 2);

define('HOST', 'localhost');
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

    <h2>Question 6: How do you define in PHP the variable PI with value 3.1416?</h2>
    <h3>Answer:
    <pre><?php echo PI; ?></pre></h3>

    <h2>Question 7: What is the output of <code>echo $numbers[3] + $numbers[4];</code>?</h2>
    <h3>Answer:
    <pre><?php echo $numbers[3] + $numbers[4]; ?></pre></h3>

    <h2>Question 8: What is the output of <code>echo $colors[3];</code>?</h2>
    <h3>Answer:
    <pre><?php echo $colors[3]; ?></pre></h3> 
    <h3>It returns an error because there are only 3 elements in the array and its highest index is 2</h3>

    <h2>Question 9: What are the keys in $Person array?</h2>
    <h3>Answer: "first_name", "last_name", and "age"</h3>

    <h2>Question 10: In PHP, how will you change the green into white in<code>$colors array?</code>?</h2>
    <h3>Answer: $colors[2] = 'white';</h3>

    <h2>Question 11: What is the output of <code>echo $hex['red'];</code>?</h2>
    <h3>Answer:
    <pre><?php echo $hex['red']; ?></pre></h3>

    <h2>Question 11: What is the output of <code>echo $hex['red'];</code>?</h2>
    <h3>Answer:
    <pre><?php echo $hex['red']; ?></pre></h3>

    <h2>Question 12: What is the output of <code>echo $matrix[1][2];</code>?</h2>
    <h3>Answer:
    <pre><?php echo  $matrix[1][2]; ?></pre></h3>

    <h2>Question 13: What is the output of <code>echo $people[0]['first_name'];</code>?</h2>
    <h3>Answer:
    <pre><?php echo  $people[0]['first_name']; ?></pre></h3>

    <h2>Question 14: What is the output of <code>echo $people[2]['email'];</code>?</h2>
    <h3>Answer:
    <pre><?php echo  $people[2]['email']; ?></pre></h3>

    <h2>Question 15: What is the output of <code>var_dump($chunkedArray);</code>?</h2>
    <h3>Answer:
    <pre><?php var_dump($chunkedArray); ?></pre></h3>

    <h2>Practice Set 1</h2>
    <form method="POST">
        Side 1: <input type="number" name="side1" required><br><br>
        Side 2: <input type="number" name="side2" required><br><br>
        Side 3: <input type="number" name="side3" required><br><br>
        <input type="submit" name="calculate" value="Calculate Area">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $side1 = floatval($_POST['side1']);
        $side2 = floatval($_POST['side2']);
        $side3 = floatval($_POST['side3']);

        $s = ($side1 + $side2 + $side3) / 2;

        $areaSquared = $s * ($s - $side1) * ($s - $side2) * ($s - $side3);
        

        $area = pow($areaSquared, 0.5);
        echo "<h3>Triangle Area: " . number_format($area, 3) . " square units</h3>";
        }

    ?>

    <h2>Practice Set 2</h2>
    <h3>List of Fruits:</h3>
    <ol>
    <?php
    $fruits = ["Apple", "Banana", "Orange", "Grape", "Mango"];

    for ($i = 0; $i < count($fruits); $i++) {
        echo "<li>" . $fruits[$i] . "</li>";
    }
    ?>
    </ol>

    <h2>Practice Set 3</h2>
    <h3>Even Numbers from Matrix:</h3>
    <ul>
    <?php
    $matrix = [
        [12, 23, 34],
        [45, 55, 62],
        [71, 84, 90],
    ];

    $row = 0;

    while ($row < count($matrix)) {
        $col = 0;

        while ($col < count($matrix[$row])) {
            if ($matrix[$row][$col] % 2 == 0) {
                echo "<li>" . $matrix[$row][$col] . "</li>";
            }
            $col++;
        }
        $row++;
    }
    ?>
    </ul>

    <h2>Practice Set 1, Part 2</h2>
        <?php

    /**
     * Get total price of all items in cart
     * @param array $items list of items with 'price'
     * @return float total price
     */
    function getTotalPrice(array $items): float {
        $total = 0;
        foreach ($items as $item) {
            $total += $item['price'];
        }
        return $total;
    }

    /**
     * remove spaces and make string lowercase
     * @param string $text input string
     * @return string modified string
     */
    function cleanString(string $text): string {
        return strtolower(str_replace(' ', '', $text));
    }

    /**
     * Check if even or odd
     * @param int $num Number to check
     * @return string Even or odd result
     */
    function isEvenOrOdd(int $num): string {
        return ($num % 2 === 0) ? "The number $num is even." : "The number $num is odd.";
    }

    $items = [
        ['name' => 'Widget A', 'price' => 10],
        ['name' => 'Widget B', 'price' => 15],
        ['name' => 'Widget C', 'price' => 20],
    ];

    echo "Total price: $" . getTotalPrice($items) . "\n";

    $originalString = "This is a poorly written program with little structure and readability.";
    echo "Modified string: " . cleanString($originalString) . "\n";

    $number = 42;
    echo isEvenOrOdd($number) . "\n";

    ?>

</body>
</html>
