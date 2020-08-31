<?php 

$getter = require_once('main.php');



// if you want to get the data as an Array raw 
// than use getGeckoCoinArray ($yourcoinId) function 

echo '<pre>';
var_dump($getter->getGeckoCoinArray('01coin'));
echo '</pre>';

// but if you want to get it as an object 
// than use getGeckoCoinObject ($yourcoinId) function 

echo '<pre>';
var_dump($getter->getGeckoCoinArray('01coin'));
echo '</pre>';


?>