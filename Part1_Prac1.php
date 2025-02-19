<!DOCTYPE html>
<html>
<head>
    <title>Triangle Area Calculator</title>
</head>
<body>
    <h2>Triangle Area Calculator</h2>
    <form method="POST">
        Side 1: <input type="number" name="side1" step="any" required><br>
        Side 2: <input type="number" name="side2" step="any" required><br>
        Side 3: <input type="number" name="side3" step="any" required><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = floatval($_POST['side1']);
        $b = floatval($_POST['side2']);
        $c = floatval($_POST['side3']);

        // Check if the sides form a valid triangle
        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
            // Calculate semi-perimeter
            $s = ($a + $b + $c) / 2;

            // Calculate area using Heron's formula (without sqrt function)
            $area = ($s * ($s - $a) * ($s - $b) * ($s - $c)) ** 0.5;

            // Display the formatted result
            echo "<p>Area of the triangle: " . number_format($area, 2) . "</p>";
        } else {
            echo "<p>Invalid triangle sides. Please enter valid values.</p>";
        }
    }
    ?>
</body>
</html>
