<?php

require "config.php";

use App\Pet;

try {
	Pet::register('Paul', 'Male', '2000-06-22', 'louisabel', 'layson@gmail.com', 'Mabalacat', '09281562678');
	echo "<li>Added 1 Pet Information";

	$pets = [
		[
			'name' => 'Maxine',
			'gender' => 'Female',
			'birthdate' => '2010-10-21',
			'owner' => 'Mark',
			'email' => 'Marky@gmail.com',
			'address' => 'Angeles',
			'contact_number' => '09277774569'
		],
		[
			'name' => 'Marion',
			'gender' => 'Female',
			'birthdate' => '2001-09-22',
			'owner' => 'maria',
			'email' => 'marialove@gmail.com',
			'address' => 'San Agustine',
			'contact_number' => '09151546387'
		]
	];
	Pet::registerMany($pets);
	echo "<li>Added " . count($pets) . " more Pet Information";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}
