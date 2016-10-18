<?php
header('Content-Type: application/json');

$array = [
	"modal" => [
		"body" => "<h3><i class=\"ion ion-fw ion-android-checkmark-circle\"></i> Second alert!</h3>",
		"class" => "col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1 col-lg-2 col-lg-offset-5 text-center",
		"close" => false,
		"closeDelay" => 2000,
		"delay" => 2000
	],
	"html" => [
		[
			"type" => "after",
			"target" => "this",
			"content" => "<div class=\"successfully alert alert-success\"><i class=\"ion ion-fw ion-checkmark\"></i> Form submitted successfully!</div>"
		]
	],
	"dom" => [
		[
			"type" => "remove",
			"target" => ".successfully"
		]
	]
];

echo json_encode($array);