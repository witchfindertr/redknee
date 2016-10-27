<?php
header('Content-Type: application/json');

$array = [
	"html" => [
		[
			"target" => "this",
			"type" => "dom",
			"content" => "<i class=\"ion ion-fw ion-happy\"></i> <span>15</span>"
		]
	],
	"toast" => [ "text" => "This Liked !", "timeOut" => 1000 ]
];

echo json_encode($array);