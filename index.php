<?php
$title = 'index';
include 'include/header.php'
?>
<br />

<?php
echo 'hello php';
echo '<br/>';
echo 'how are you';
echo '<br/>';
?>
<?php
$name = 'Azan';
$Age = 23;

echo $name;
// echo $Age;
echo '<h1>My name is: ' . $name . '</h1>';
echo '<h1>My Age is: ' . $Age . '</h1>';
?>
<button type="button" class="btn btn-info">CLick The button</button>
<?php
require 'include/footer.php'
?>