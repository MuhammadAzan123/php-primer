<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and time manipulation</title>
</head>

<body>
    <h1>Date and Time Manipulation</h1>
    <?php
    $todaydate = getdate();
    echo 'Today Date: <br>';
    echo $todaydate['mday'] . '<br>';
    echo $todaydate['mon'] . '<br>';
    echo $todaydate['year'] . '<br>';
    echo "Today Date :" . $todaydate['mday'] . '/' . $todaydate['mon'] . '/' . $todaydate['year'];
    echo time();
    ?>
</body>

</html>