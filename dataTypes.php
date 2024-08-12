<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // data types:
    // 1) string
    // 2) integer
    // 3) float
    // 4) boolean
    // 5) array
    // 6) object
    echo "<h1> Data Types </h1><br>";
    $var = "this is a string";
    echo var_dump($var);
    echo "<br>";

    $var1 = 34;
    echo var_dump($var1);
    echo "<br>";

    $var2 = 3.2;
    echo var_dump($var2);
    echo "<br>";

    $var3 = true;
    echo var_dump($var3);
    echo "<br>";

    // for constants, use define kyword
    // prefer writting on start of php script
    define('pi', 3.14);
    echo pi;
    echo "<br>";
    ?>
</body>

</html>