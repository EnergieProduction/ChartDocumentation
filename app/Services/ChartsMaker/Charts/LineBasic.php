<?php

namespace App\Services\ChartsMaker\Charts;

use EnergieProduction\Chart\Criterias;

class LineBasic extends Chart {

	public function render()
	{
		$this->chart->pushSubset('title', function($title){
			$title->pushCriteria(new Criterias\Text('Solar Employment Growth by Sector, 2010-2016'));
		});

		$this->chart->pushSubset('subtitle', function($subtitle){
			$subtitle->pushCriteria(new Criterias\Text('Source: thesolarfoundation.com'));
		});

		$this->chart->pushSubset('yAxis.title', function($title){
			$title->pushCriteria(new Criterias\Text('Number of Employees'));
		});

		$this->chart->pushSubset('legend', function($legend){
			$legend->pushCriteria(new Criterias\Layout('vertical'));
			$legend->pushCriteria(new Criterias\Align('right'));
			$legend->pushCriteria(new Criterias\VerticalAlign('middle'));
		});

		$this->chart->pushSubset('plotOptions.series', function($plotOptions){
			$plotOptions->pushCriteria(new Criterias\PointStart(2010));
		});

		$this->chart->pushSubset('series', function($series){
			$series->pushCriteria(new Criterias\Name('Installation'));
			$series->pushCriteria(new Criterias\Data([43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]));
		});

		$this->chart->pushSubset('series', function($series){
			$series->pushCriteria(new Criterias\Name('Manufacturing'));
			$series->pushCriteria(new Criterias\Data([24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]));
		});

		return $this->chart->render();      
	}
}
