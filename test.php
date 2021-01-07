<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>PHP Tutorial</p>
    <?php echo "Learning php";
    $name = "Sunway College";
    $years = 13;
    $fee_amount = 1000.75;

    echo "<p>College Name: ", $name, " Total years: ", $years, " Fee Amount: ", $fee_amount, "</p>";
    ?>

    <p>Scope of Variables: Local, Global, Static</p>
    <?php
    // global variable $x
    $x = 10;

    function test($x)
    {
        echo "The value of x is: ", $x;
    }

    test($x);

    ?>
</body>

</html>