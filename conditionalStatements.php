<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $age = 15;

    if ($age >= 18) {
        echo "you can vote!";
    } else if ($age == 7) {
        echo "you are 7 years old!";
    } else {
        echo "you can't vote!";
    }
    ?>
</body>

</html>