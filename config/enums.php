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
		'name' => 'SimplyHired',
		'config' => [
			'key' => getenv('SIMPLYHIRED_KEY')
		],
	],
];

$api_names = [];
foreach ($apis as $key=>$api) {
	$api_names[$key] = $api['name'];
}

$states = [
	''  => NULL,
	'AL'=>'Alabama',
    'AK'=>'Alaska',
    'AZ'=>'Arizona',
    'AR'=>'Arkansas',
    'CA'=>'California',
    'CO'=>'Colorado',
    'CT'=>'Connecticut',
    'DE'=>'Delaware',
    'DC'=>'District of Columbia',
    'FL'=>'Florida',
    'GA'=>'Georgia',
    'HI'=>'Hawaii',
    'ID'=>'Idaho',
    'IL'=>'Illinois',
    'IN'=>'Indiana',
    'IA'=>'Iowa',
    'KS'=>'Kansas',
    'KY'=>'Kentucky',
    'LA'=>'Louisiana',
    'ME'=>'Maine',
    'MD'=>'Maryland',
    'MA'=>'Massachusetts',
    'MI'=>'Michigan',
    'MN'=>'Minnesota',
    'MS'=>'Mississippi',
    'MO'=>'Missouri',
    'MT'=>'Montana',
    'NE'=>'Nebraska',
    'NV'=>'Nevada',
    'NH'=>'New Hampshire',
    'NJ'=>'New Jersey',
    'NM'=>'New Mexico',
    'NY'=>'New York',
    'NC'=>'North Carolina',
    'ND'=>'North Dakota',
    'OH'=>'Ohio',
    'OK'=>'Oklahoma',
    'OR'=>'Oregon',
    'PA'=>'Pennsylvania',
    'RI'=>'Rhode Island',
    'SC'=>'South Carolina',
    'SD'=>'South Dakota',
    'TN'=>'Tennessee',
    'TX'=>'Texas',
    'UT'=>'Utah',
    'VT'=>'Vermont',
    'VA'=>'Virginia',
    'WA'=>'Washington',
    'WV'=>'West Virginia',
    'WI'=>'Wisconsin',
    'WY'=>'Wyoming',
];

return [
	'apis' => $apis,
	'api_names' => $api_names,
	'states' => $states,
];
