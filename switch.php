<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <h1>Switch Statment</h1>
    <?php
    $grade = '50';
    switch ($grade) {
        case '85':
            echo '<h2 style=color:green>You have got 4gpa</h2>';
            break;
        case '75':
            echo '<h2 style=color:blue>You have got 3.5gpa</h2>';
            break;
        case '70':
            echo '<h2 style=color:grey>You have got 3gpa</h2>';
            break;
        case '65':
            echo '<h2 style=color:pink>You have got 2.5gpa</h2>';
            break;
        default:
            echo '<h2 style=color:red>you have failed</h2>';
            break;
    }
    ?>
</body>

</html>