<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php
	echo "My first PHP script!";
	?>


	<?php
	// Prints the day
	echo date("l") . "<br>";

	// Prints the day, date, month, year, time, AM or PM
	echo date("l jS \of F Y h:i:s A");
	?>
<br>


<?php
// $now = new DateTime();
$dtA = new DateTime('3:05PM');
$dtB = new DateTime('3:04PM');

if ( $dtA > $dtB ) {
	$background_color = "red";
	echo "<body style='background-color:pink'>";
  echo 'dtA is groter > dan dtB';
}
else {
	$background_color = "blue";
	echo "<body style='background-color:red'>";
  echo 'dtA is kleiner < dan dtB';
}

?>


</body>
</html>
