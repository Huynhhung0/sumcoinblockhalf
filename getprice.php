<?php
$data = file_get_contents('https://sumcoinindex.com/rates/price2.json');
$price = json_decode($data, true);
$sumPrice = (float)$price["exch_rate"];

if ($price <= 1.0) {
	die(); 
}

$file = "price.txt";
$fh = fopen($file, 'w') or die("can't open file");
fwrite($fh, $sumPrice);
fclose($fh);
?>
