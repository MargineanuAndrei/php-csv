<?php

$names = array("Andrei","Boris","Ivan","Grigorie","Valera","Iura","Stas","Dan","Eugen","Marcus","Dinu","Sergiu","Cristi");

$lastNames = array("Petrov","Horicovici","Borisovici","Ivanov","Rata","Magodan","Black","Hajdeu","Caisin","Iepureanu","Orlov");


$csv = fopen("generateCustumers.csv",'w');

for($i=0;$i<1000000;$i++) {
	$name = $names[array_rand($names)];
	$lastName = $lastNames[array_rand($lastNames)];
	$email = $lastName.$name."@gmail.com";
	$phone = rand(67000000, 69999999);

	fputcsv($csv, array(
		"name" => $name,
		"lastName" => $lastName,
		"email" => $email,
		"phone" => $phone
	));	
}

fclose($csv);