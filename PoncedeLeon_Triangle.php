<!DOCTYPE html>
<html>
<head>
    <title>Triangle Area Calculator</title>
</head>
<body>

<h2>Calculate Triangle Area using Heron's Formula</h2>
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

</body>
</html>
