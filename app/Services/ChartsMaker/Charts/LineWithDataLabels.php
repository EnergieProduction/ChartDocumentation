<?php

namespace App\Services\ChartsMaker\Charts;

use EnergieProduction\Chart\Criterias;

class LineWithDataLabels extends Chart {

	public function render()
	{
        $this->chart->pushSubset('title', function($title){
            $title->pushCriteria(new Criterias\Text('Monthly Average Temperature'));
        });

        $this->chart->pushSubset('subtitle', function($subtitle){
            $subtitle->pushCriteria(new Criterias\Text('Source: WorldClimate.com'));
        });

        $this->chart->pushSubset('xAxis', function($title){
            $title->pushCriteria(new Criterias\Categories(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']));
        });

        $this->chart->pushSubset('yAxis.title', function($title){
            $title->pushCriteria(new Criterias\Text('Temperature (°C)'));
        });

        $this->chart->pushSubset('plotOptions.line.dataLabels', function($title){
            $title->pushCriteria(new Criterias\Enabled(true));
        });

        $this->chart->pushSubset('plotOptions.line', function($title){
            $title->pushCriteria(new Criterias\EnableMouseTracking(false));
        });

        $this->chart->pushSubset('series', function($series){
            $series->pushCriteria(new Criterias\Name('Tokyo'));
            $series->pushCriteria(new Criterias\Data([7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]));
        });

        $this->chart->pushSubset('series', function($series){
            $series->pushCriteria(new Criterias\Name('London'));
            $series->pushCriteria(new Criterias\Data([3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]));
        });

        return $this->chart->render();
	}
}
