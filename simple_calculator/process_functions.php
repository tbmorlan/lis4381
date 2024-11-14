<?php
ini_set('display_errors', 1);

error_reporting(E_ALL);

//exit(print_r($_POST));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="My online portfolio that illustrates skills acquired while working through various project requirements.">
    <meta name="author" content="Tanner Morlan">
    <link rel="icon" href="../favicon.ico">

    <title>LIS4381 - Simple Calculator</title>
    <?php include_once("../css/include_css.php"); ?>

    <style type="text/css">
        h2 {
            color: #666;
            padding: 0px;
            font-size: 32px;
            font-family: "trebuchet ms", sans-serif;

        }

        h3 {
            color: #666;
            padding: 0px;
            font-family: "trebuchet ms", sans-serif;
        }

        p {
            color: #666;
            padding: 0px;
            font-family: "trebuchet ms", sans-serif;
        }
    </style>
</head>

<body>

    <?php include_once("../global/nav.php"); ?>

    <div class="container">
        <div class="starter-template">
            <div class="page-header">
                <h1>Simple Calculator</h1>
                <h3>Performs Addition, Subtraction, Multiplication, Division, and Exponentiation</h3>
            </div>

            <?php
            if (!empty($_POST)) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];
            }

            if (preg_match('/^[-+]?[0-9]*\.?[0-9]+$/', $num1) && preg_match('/^[-+]?[0-9]*\.?[0-9]+$/', $num2)) {

                if (is_numeric($num1) && is_numeric($num2)) {
                    echo '<h2>' . "$operation" . '</h2>';

                    function AddNum($x, $y)
                    {
                        echo "$x" . " + " . "$y" . " = ";
                        echo $x + $y;
                    }

                    function SubtractNum($x, $y)
                    {
                        echo "$x" . " - " . "$y" . " = ";
                        echo $x - $y;
                    }

                    function MultiplyNum($x, $y)
                    {
                        echo "$x" . " * " . "$y" . " = ";
                        echo $x * $y;
                    }

                    function DivideNum($x, $y)
                    {
                        if ($y == 0) {
                            echo "Cannot divide by zero!";
                        } else {
                            echo "$x" . " / " . "$y" . " = ";
                            echo $x / $y;
                        }
                    }

                    function PowerNum($x, $y)
                    {
                        echo "$x" . " raised to the power of " . "$y" . " = ";
                        echo pow($x, $y);
                    }

                    if ($operation == 'addition') {
                        AddNum($num1, $num2);
                    } else if ($operation == 'subtraction') {
                        SubtractNum($num1, $num2);
                    } else if ($operation == 'multiplication') {
                        MultiplyNum($num1, $num2);
                    } else if ($operation == 'division') {
                        DivideNum($num1, $num2);
                    } else if ($operation == 'exponentiation') {
                        PowerNum($num1, $num2);
                    } else {
                        echo "Must select an operation.";
                    }
                    ?>
                    <p>
                        <?php

                } else {
                    echo "Must enter valid number.";
                }
            } else {
                header('Location: index.php');
            }
            ?>
            </p>
            <?php include_once "../global/footer.php"; ?>

</body>

</html>