<?php

namespace App\Services\ChartsMaker\Charts;

use EnergieProduction\Chart\Criterias;

class Areastacked extends Chart {

	public function render()
	{
        $this->chart->pushSubset('chart', function($chart){
            $chart->pushCriteria(new Criterias\Type('area'));
        });

        $this->chart->pushSubset('title', function($title){
            $title->pushCriteria(new Criterias\Text('Historic and Estimated Worldwide Population Growth by Region'));
        });

        $this->chart->pushSubset('subtitle', function($subtitle){
            $subtitle->pushCriteria(new Criterias\Text('Source: Wikipedia.org'));
        });

        $this->chart->pushSubset('xAxis', function($tooltip){
            $tooltip->pushCriteria(new Criterias\Categories(['1750', '1800', '1850', '1900', '1950', '1999', '2050']));
            $tooltip->pushCriteria(new Criterias\TickmarkPlacement('on'));
            $this->chart->pushSubset('title', function($title){
                $title->pushCriteria(new Criterias\Enabled(false));
            });
        });

        $this->chart->pushSubset('yAxis.title', function($title){
            $title->pushCriteria(new Criterias\Text('Millions'));
        });

        $this->chart->pushSubset('tooltip', function($tooltip){
            $tooltip->pushCriteria(new Criterias\Split(true));
            $tooltip->pushCriteria(new Criterias\ValueSuffix(' millions'));
        });

        $this->chart->pushSubset('plotOptions.area', function($area){
            $area->pushCriteria(new Criterias\Stacking('normal'));
            $area->pushCriteria(new Criterias\LineColor('#666666'));
            $area->pushCriteria(new Criterias\LineWidth(1));
            $this->chart->pushSubset('marker', function($marker){
                $marker->pushCriteria(new Criterias\LineWidth(1));
                $marker->pushCriteria(new Criterias\LineColor('#666666'));
            });            
        });

        $this->chart->pushSubset('series', function($series){
            $series->pushCriteria(new Criterias\Name('Asia'));
            $series->pushCriteria(new Criterias\Data([502, 635, 809, 947, 1402, 3634, 5268]));
        });

        $this->chart->pushSubset('series', function($series){
            $series->pushCriteria(new Criterias\Name('Africa'));
            $series->pushCriteria(new Criterias\Data([106, 107, 111, 133, 221, 767, 1766]));
        });

        $this->chart->pushSubset('series', function($series){
            $series->pushCriteria(new Criterias\Name('Europe'));
            $series->pushCriteria(new Criterias\Data([163, 203, 276, 408, 547, 729, 628]));
        });

        $this->chart->pushSubset('series', function($series){
            $series->pushCriteria(new Criterias\Name('America'));
            $series->pushCriteria(new Criterias\Data([18, 31, 54, 156, 339, 818, 1201]));
        });

        $this->chart->pushSubset('series', function($series){
            $series->pushCriteria(new Criterias\Name('Oceania'));
            $series->pushCriteria(new Criterias\Data([2, 2, 2, 6, 13, 30, 46]));
        });

        return $this->chart->render();
	}
}
