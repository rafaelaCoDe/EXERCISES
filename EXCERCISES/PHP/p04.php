<?php
$hour = date("H");
$title = ($hour < 12) ? "Καλημερα" : "Καλησπερα";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?> - Σελιδα</title>
	</head>
	<body>
	<h1> Δυναμικος τιτλος</h1>
	</body>
	</html>
	