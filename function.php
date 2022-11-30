<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<body>
    <h1>Function</h1>
    <?php
    include 'include/menu.php'
    ?>
    <?php
    function writemessage()
    {
        echo 'We have arrived in Qatar <br>';
    }
    writemessage();
    echo '<hr>';
    writemessage();

    function addfunction($num1, $num2)
    {
        $num = $num1 + $num2;
        $num2 = 12;
        $num2 = $num2 + 2;
        echo "The Sum of $num1 and $num2 is :$num";
    }
    function changeNum(&$num)
    {
        $num = $num + 10;
    }
    function returnproduct($num1, $num2)
    {
        $prod = $num1 * $num2;
        return $prod;
    }

    $num = 500;
    changeNum($num);
    echo $num;
    addfunction(23, $num2);
    $return_value = returnproduct(10, 200);
    echo $return_value . '<br>';
    ?>
    <?php
    require 'include/footer.php'
    ?>
    <!-- </body>

</html> -->