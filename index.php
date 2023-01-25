<?php
require('Auto.php');


$mercedes = new Auto();
$mercedes->name = "GLS230";
$mercedes->ps = 450;

$mercedes->run();

echo "<br>";

$vw = new Auto();
$vw->name = "Tiguan";
$vw->ps = 150;

$vw->run();

echo "<br>";




?>