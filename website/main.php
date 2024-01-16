<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #f5f5f5;
            color: #333;
            text-align: center;
        }

        .fr {
            text-align: center;
            padding-top: 150px;
        }

        .cl1 {
            font-size: x-large;
            font-weight: bold ;
            font-family: monospace;
        }

        p {
            font-family: 'Courier New', Courier, monospace;
        }

        .btn {
            height: 20px;
            border-radius: 10px; 
            padding: 8px;
            border: 1px solid black;
            font-size: medium;
            font-family: cursive;
        }

        .cl2 {
            text-align: center;
        }

        .add {
            color: black;
            text-decoration: none;
            margin: 0 15px;
            transition: color 0.2s ease-in-out; /* Added color transition for smoother color change */
        }

        .add:hover {
            animation: box-ani 5s cubic-bezier(0.51, -0.01, 0, 1.04) infinite alternate;
            transform: scale(1.1); /* Increase the size by 10% on hover */
            background-color: black;
            color: white;
        }

        @keyframes box-ani {
            0% {
                width: 40px;
                height: 40px;
            }
        }

        .sub {
            color: black;
            text-decoration: none;
            margin: 0 15px;
            transition: color 0.2s ease-in-out; /* Added color transition for smoother color change */
        }

        .sub:hover {
            animation: box-ani 5s cubic-bezier(0.51, -0.01, 0, 1.04) infinite alternate;
            transform: scale(1.1); /* Increase the size by 10% on hover */
            background-color: black;
            color: white;
        }

        @keyframes box-ani {
            0% {
                width: 40px;
                height: 40px;
            }
        }

        .mul {
            color: black;
            text-decoration: none;
            margin: 0 15px;
            transition: color 0.2s ease-in-out; /* Added color transition for smoother color change */
        }

        .mul:hover {
            animation: box-ani 5s cubic-bezier(0.51, -0.01, 0, 1.04) infinite alternate;
            transform: scale(1.1); /* Increase the size by 10% on hover */
            background-color: black;
            color: white;
        }

        @keyframes box-ani {
            0% {
                width: 40px;
                height: 40px;
            }
        }

        .div {
            color: black;
            text-decoration: none;
            margin: 0 15px;
            transition: color 0.2s ease-in-out; /* Added color transition for smoother color change */
        }

        .div:hover {
            animation: box-ani 5s cubic-bezier(0.51, -0.01, 0, 1.04) infinite alternate;
            transform: scale(1.1); /* Increase the size by 10% on hover */
            background-color: black;
            color: white;
        }

        @keyframes box-ani {
            0% {
                width: 40px;
                height: 40px;
            }
        }


    </style>
</head>
<body>
    
    <form class = "fr" action = "main.php" method = "post">
    <div class = "cl1">
        <label>Number 1:</label>
        <input class = "btn" type = "text" name = "num1"><br><br>
        <label>Number 2:</label>
        <input class = "btn" type = "text" name = "num2"><br><br>
    </div>
    
    <div class = "cl2">
        <input class = "add" type = "submit" name = "addition" value = "+">
        <input class = "sub" type = "submit" name = "subtraction" value = "-">
        <input class = "mul" type = "submit" name = "multiplication" value = "*">
        <input class = "div" type = "submit" name = "division" value = "/">
    </div>
    </form>

</body>
</html>

<?php

        $x = $_POST["num1"];
        $y = $_POST["num2"];
        $total = null;
    
        if (isset($_POST["addition"])) {
            // Addition
            $total = $x + $y;
        } elseif (isset($_POST["subtraction"])) {
            // Subtraction
            $total = $x - $y;
        } elseif (isset($_POST["multiplication"])) {
            // Multiplication
            $total = $x * $y;
        } elseif (isset($_POST["division"])) {
            // Division
            if ($y != 0) {
                $total = $x / $y;
                $total = round($total, 2);
            } else {
                echo "Error: Division by zero is not allowed.";
            }
        }
    
        if ($total !== null) {
            echo "<br><p>The total is {$total}</p>";
        }
    
    
    ?>
    