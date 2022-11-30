<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php premier - If else statment</title>
</head>

<body>
    <?php
    echo '<h2>if statment</h2>';
    $grade = 5;
    if ($grade >= 30) {
        echo '<h3 style="color:green">You have passed the test</h3>';
    } else {
        echo '<h3 style="color:red">You have failed the test</h3>';
    }
    $grade = 'A';
    if ($grade == 'A') {
        echo '<h2>you are a genius</h2>';
    } elseif ($grade == 'B') {
        echo '<h2>you are a good</h2>';
    } else {
        echo '<h2>you are failed</h2>';
    }
    ?>
</body>

</html>