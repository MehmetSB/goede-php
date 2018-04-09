<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
		date_default_timezone_set('Europe/Amsterdam');
		$time = date("H:i:s");
		echo date("H:i:s");
		if ($time >"06:00" && $time < "12:00")
		{
			echo '<body style="background-image: url(./backgrounds/morning.png)">';
			echo '<h1>Goede morgen!</h1>';
			echo '<h2>Het is nu ' . $time . '</h2>';
		}
		else if ($time >"12:00" && $time < "18:00")
		{
			echo '<body style="background-image: url(./backgrounds/afternoon.png)">';
			echo '<h1>Goede middag!</h1>';
			echo '<h2>Het is nu ' . $time . '</h2>';
		}
		else if ($time >"18:00" && $time < "24:00")
		{
			echo '<body style="background-image: url(./backgrounds/evening.png)">';
			echo '<h1>Goede avond!</h1>';
			echo '<h2>Het is nu ' . $time . '</h2>';
		}
		else if ($time >"00:00" && $time < "06:00")
		{
			echo '<body style="background-image: url(./backgrounds/night.png)">';
			echo '<h1>Goede nacht!</h1>';
			echo '<h2>Het is nu ' . $time . '</h2>';
		}
		?>
	</body>
</html>
