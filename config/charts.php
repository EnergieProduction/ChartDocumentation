<?php

return [

	'default' => 'line.basic',

	'availables' => [
		'line' => [
			'basic' => [
				'type' => 'line',
				'sub_type' => 'basic',
			],			
			'with-data-labels' => [
				'type' => 'line',
				'sub_type' => 'with-data-labels',
			],			
		],
		'area' => [
			'basic' => [
				'type' => 'area',
				'sub_type' => 'basic',
			],			
			'range-and-line' => [
				'type' => 'area',
				'sub_type' => 'range-and-line',
			],
			'stacked' => [
				'type' => 'area',
				'sub_type' => 'stacked',
			]
		],	
		'scatter' => [
			'plot' => [
				'type' => 'scatter',
				'sub_type' => 'plot',
			]
		]	
	]
];