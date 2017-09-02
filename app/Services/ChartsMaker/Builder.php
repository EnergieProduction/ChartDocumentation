<?php

namespace App\Services\ChartsMaker;

use App\Exceptions\UnknownGraphException;

class Builder
{
    public function __construct($config)
    {
        $this->config = $config;
    }

    public function make($key)
    {
        $config = array_get($this->config['availables'], $key);

        if (! $config) {
            throw new UnknownGraphException();
        }

        $chart = $this->getChartClass($config);

        return new $chart($config);
    }

    public function defaultChart()
    {
        return $this->config['default'];
    }

    protected function getChartClass($config)
    {
        $class = ucfirst($config['type']) . ucfirst(camel_case($config['sub_type']));

        return "\\App\\Services\\ChartsMaker\\Charts\\" . $class;
    }
}
