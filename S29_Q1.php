<!DOCTYPE html>
<html>
<head>
    <title>Number Operations</title>
</head>
<body>
    <h2>Number Operations</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Enter a number: <input type="number" name="number" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Function to generate Fibonacci series
    function fibonacci($number)
    {
        $fibonacciSeries = array(0, 1); // Initialize the series

        for ($i = 2; $i < $number; $i++) {
            $fibonacciSeries[$i] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
        }

        return $fibonacciSeries;
    }

    // Function to calculate the sum of digits
    function sumOfDigits($number)
    {
        $sum = 0;
        while ($number != 0) {
            $sum += $number % 10;
            $number = (int) ($number / 10);
        }

        return $sum;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        echo "<h3>Results:</h3>";

        // Generate Fibonacci series
        echo "<strong>Fibonacci Series:</strong><br>";
        $fibonacciSeries = fibonacci($number);
        foreach ($fibonacciSeries as $fibonacciNumber) {
            echo $fibonacciNumber . " ";
        }

        echo "<br><br>";

        // Calculate sum of digits
        echo "<strong>Sum of Digits:</strong><br>";
        $sum = sumOfDigits($number);
        echo "The sum of digits of $number is $sum.";
    }
    ?>
</body>
</html>