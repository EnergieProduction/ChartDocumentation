<?php

namespace App\Services\ChartsMaker\Charts;

class Chart {

	protected $config;

    public function __construct($config)
    {
        $this->chart = app('chart');      
        $this->config = $config;  
    }

	public function type()
	{
		return $this->config['type'];
	}  	

	public function subType()
	{
		return $this->config['sub_type'];
	} 	
}
