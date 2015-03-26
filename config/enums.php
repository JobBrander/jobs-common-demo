<?php

$apis = [
	'careerbuilder' => [
		'name' => 'Careerbuilder',
		'config' => [
			'key' => getenv('CAREERBUILDER_KEY')
		],
	],
	'dice' => [
		'name' => 'Dice',
		'config' => [
		],
	],
	'govt' => [
		'name' => 'Govt',
		'config' => [
		],
	],
	'indeed' => [
		'name' => 'Indeed',
		'config' => [
			'publisher_id' => getenv('INDEED_PUBLISHER_ID')
		],
	],
	'j2c' => [
		'name' => 'J2c',
		'config' => [
			'id' => getenv('J2C_ID'),
			'password' => getenv('J2C_PASSWORD')
		],
	],
	'juju' => [
		'name' => 'Juju',
		'config' => [
			'partner_id' => getenv('JUJU_PARTNER_ID')
		],
	],
	'simply' => [
		'name' => 'Simply',
		'config' => [
			'key' => getenv('SIMPLYHIRED_KEY')
		],
	],
];

$api_names = [];
foreach ($apis as $key=>$api) {
	$api_names[$key] = $api['name'];
}

return [
	'apis' => $apis,
	'api_names' => $api_names
];
