<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string</title>
</head>

<body>
    <h1>String</h1>
    <?php
    // concetanation of String
    $phrase1 = 'My name is Azan ';
    $phrase2 = 'From Mingora Swat';
    $name = 'azan khan';
    echo $phrase1 . "Khan " . $phrase2;
    echo '<br>';
    echo '<hr>';


    //    Transformation of string
    echo "Transformation of text is:" . ucfirst($name) . "<br>";
    echo "Transformation of First text is:" . ucwords($name) . "<br>";
    echo "Transformation to Upper:" . strtoupper($name) . "<br>";
    echo "Transformation of Lower:" . strtolower("THIS IS KHAN") . "<br>";
    echo '<hr>';
    echo 'Repeat String: ' . str_repeat('a', 10) . '<br>';
    echo 'Repeat String Nested: ' . strtoupper(str_repeat('a', 10)) . '<br>';
    echo '<br>';
    echo 'Here is the Sub String: ' . substr($name, 3, 7) . '<br>';
    echo 'Here is the Position: ' . strpos($name, 'k') . '<br>';
    echo 'Here is the Char: ' . strchr($name, 'z') . '<br>';
    echo 'lenght of string: ' . strlen($name) . '<br>';
    echo 'Replace of a World: ' . str_replace("Mingora", "Saidu", $phrase2) . '<br>';

    ?>
    <?php
    require 'include/footer.php'
    ?>
    <!-- </body>

</html> -->