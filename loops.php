<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // array
    $fruits = array("apple", "mango", "banana", "grapes");
    echo $fruits[0];
    echo "<br>";
    echo $fruits[1];
    echo "<br>";
    echo count($fruits);
    echo "<br>";

    // loops
    $a = 0;
    while ($a < 10) {
        echo "<br> the value of a is: ";
        echo $a;
        $a++;
    }
    // iterating the array
    $size = count($fruits);
    $i = 0;
    // using a while loop
    echo "<h1> using a while loop </h1>";
    while ($i < $size) {
        echo "<br>";
        echo "the value of fruit is: ";
        echo $fruits[$i];
        $i++;
    }
    // using do-while loop
    echo "<h1> Using a do-while loop </h1>";
    $n = 0;
    do {
        echo "<br> the fruit is: ";
        echo $fruits[$n];
        $n++;
    } while ($n < 4);

    // using a for loop
    echo "<h1> using a for loop </h1>";
    for ($a = 0; $a < $size; $a++) {
        echo "<br> the value of a is: ";
        echo $a;
    }
    ?>
</body>

</html>