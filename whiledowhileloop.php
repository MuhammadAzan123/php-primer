<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while/dowhileloop</title>
</head>

<body>
    <h1>while loop</h1>
    <?php
    $grade = 0;

    while ($grade < 10) {
        echo '<p>I am less than 10</p>';
        $grade++;
    }
    echo 'Exit Loop'
    ?>
    <h1>Do-while loop</h1>
    <?php
    $grade = 0;
    do {
        echo '<p>I am do while</p>';
        $grade++;
    } while ($grade < 10);
    echo 'Exit Loop';
    ?>

</body>

</html>