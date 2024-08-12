<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // operators in php:
    // Arithematic operators
    $variable1 = 3;
    $variable2 = 4;

    echo "the value of var1 + var2 is: ";
    echo $variable1 + $variable2;
    echo "<br>";

    echo "the value of var1 - var2 is: ";
    echo $variable1 - $variable2;
    echo "<br>";

    echo "the value of var1 * var2 is: ";
    echo $variable1 * $variable2;
    echo "<br>";

    echo "the value of var1 / var2 is: ";
    echo $variable1 / $variable2;
    echo "<br>";
    // Assignment operators
    $newVar = $variable1;
    echo "the value of new var is: ";
    echo $newVar;
    echo "<br>";
    $newVar += 1;
    $newVar = $newVar * 2;
    echo "the value updated value of new var is: ";
    echo $newVar;
    echo "<br>";
    // Comparison operators
    echo "<h1> Comparison Operators </h1>";
    echo "<br>";
    echo "the value of 1==4 is ";
    echo var_dump(1 == 4);
    echo "<br>";
    echo "the value of 1!=4 is ";
    echo var_dump(1 != 4);
    echo "<br>";
    echo "the value of 1>=4 is ";
    echo var_dump(1 >= 4);
    echo "<br>";
    echo "the value of 1<=4 is ";
    echo var_dump(1 <= 4);
    echo "<br>";
    // Increment/decrement operators
    $variable1++;
    $variable2++;
    $variable1--;
    ++$variable2;
    // Logical operators
    // and(&&)
    // or(||)
    // xor
    // not(!)
    ?>
</body>

</html>