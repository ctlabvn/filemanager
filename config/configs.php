<?php
return [
	'FileManager' => [
		'ext' => [
			'allowed' => ['doc', 'docx', 'jpg', 'jpeg', 'png', 'xls', 'xlsx'],
			'deny' => ['php', 'exe', 'msi', 'bin', 'jar', 'java', 'sh', 'bat', 'asp', 'aspx', 'html', 'htm', 'xml', 'json'],
		],
	]
	'WyriHaximus' => [
        'FlyPie' =>
        	'local' => [
                'adapter' => 'Local', // The adapter to use for this filesystem
                'vars' => [
                    // Array with data required to build the client, no need for it when you're providing the client or factory yourself
                ],
            ]
        ]
    ]
];