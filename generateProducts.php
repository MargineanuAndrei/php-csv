<?php

$names = array("A","B","C","X","Moto","Ra","Op","Cod","RR");

$distributors = array("LG","Samsung","Apple","Vedafone","Sony","Huawei","Nokia", "Panasonic", "Motorola");


$csv = fopen("generateProducts.csv",'w');

for($i=0;$i<1000000;$i++) {
	$name = $names[array_rand($names)].rand(100, 9000);
	$code = rand(10000000, 90000000);
	$price = rand(100, 9000);
	$distributor = $distributors[array_rand($distributors)];

	fputcsv($csv, array(
		"name" => $name,
		"code" => $code,
		"distributor" => $distributor,
		"price" => $price
	));	
}

fclose($csv);