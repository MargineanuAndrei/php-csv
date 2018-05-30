<?php

date_default_timezone_set("UTC");

$csv = fopen("generateOrders.csv",'w');

for($i=0;$i<1000000;$i++) {
	$productId = rand(1, 1000000);
	$custumerId = rand(1, 1000000);
	$date = date("Y-m-d H:i:s",mt_rand(1497758400000, 1529294400000));

	fputcsv($csv, array(
		"productId" => $productId,
		"custumerId" => $custumerId,
		"date" => $date
	));	
}

fclose($csv);