<!DOCTYPE html>
<html>
<head>
	<title>Date</title>
</head>
<body>
	<h1>Menampilkan waktu dengan mode 12 jam dan 24 jam</h1>
</body>
</html>

<?php

date_default_timezone_set("Asia/Jakarta");

$waktuA = date('g:i:s a');

echo "Waktu dengan mode 12 jam adalah : " . $waktuA;
echo "<br/><br/>";

$waktuB = date('G:i:s');

echo "Waktu dengan mode 24 adalah : " . $waktuB . " WIB";

 ?>