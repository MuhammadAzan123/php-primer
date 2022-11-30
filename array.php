<?php
$title = 'array';
include 'include/header.php';
?>
<?php
$number = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
echo "<p>The array number 3 is: $number[3]</p>";

$size = count($number);
echo "The size of array is $size";

for ($count = 0; $count < $size; $count++) {
    echo "<p>$number[$count]</p>";
}

?>
<?php
require 'include/footer.php'
?>
<!-- </body>

</html> -->