$chart = app(&#x27;chart&#x27;);

$chart-&#x3E;pushSubset(&#x27;chart&#x27;, function($chart){
    $chart-&#x3E;pushCriteria(new Criterias\Type(&#x27;area&#x27;));
});

$chart-&#x3E;pushSubset(&#x27;title&#x27;, function($title){
    $title-&#x3E;pushCriteria(new Criterias\Text(&#x27;Historic and Estimated Worldwide Population Growth by Region&#x27;));
});

$chart-&#x3E;pushSubset(&#x27;subtitle&#x27;, function($subtitle){
    $subtitle-&#x3E;pushCriteria(new Criterias\Text(&#x27;Source: Wikipedia.org&#x27;));
});

$chart-&#x3E;pushSubset(&#x27;xAxis&#x27;, function($tooltip){
    $tooltip-&#x3E;pushCriteria(new Criterias\Categories([&#x27;1750&#x27;, &#x27;1800&#x27;, &#x27;1850&#x27;, &#x27;1900&#x27;, &#x27;1950&#x27;, &#x27;1999&#x27;, &#x27;2050&#x27;]));
    $tooltip-&#x3E;pushCriteria(new Criterias\TickmarkPlacement(&#x27;on&#x27;));
    $chart-&#x3E;pushSubset(&#x27;title&#x27;, function($title){
        $title-&#x3E;pushCriteria(new Criterias\Enabled(false));
    });
});

$chart-&#x3E;pushSubset(&#x27;yAxis.title&#x27;, function($title){
    $title-&#x3E;pushCriteria(new Criterias\Text(&#x27;Millions&#x27;));
});

$chart-&#x3E;pushSubset(&#x27;tooltip&#x27;, function($tooltip){
    $tooltip-&#x3E;pushCriteria(new Criterias\Split(true));
    $tooltip-&#x3E;pushCriteria(new Criterias\ValueSuffix(&#x27; millions&#x27;));
});

$chart-&#x3E;pushSubset(&#x27;plotOptions.area&#x27;, function($area){
    $area-&#x3E;pushCriteria(new Criterias\Stacking(&#x27;normal&#x27;));
    $area-&#x3E;pushCriteria(new Criterias\LineColor(&#x27;#666666&#x27;));
    $area-&#x3E;pushCriteria(new Criterias\LineWidth(1));
    $chart-&#x3E;pushSubset(&#x27;marker&#x27;, function($marker){
        $marker-&#x3E;pushCriteria(new Criterias\LineWidth(1));
        $marker-&#x3E;pushCriteria(new Criterias\LineColor(&#x27;#666666&#x27;));
    });            
});

$chart-&#x3E;pushSubset(&#x27;series&#x27;, function($series){
    $series-&#x3E;pushCriteria(new Criterias\Name(&#x27;Asia&#x27;));
    $series-&#x3E;pushCriteria(new Criterias\Data([502, 635, 809, 947, 1402, 3634, 5268]));
});

$chart-&#x3E;pushSubset(&#x27;series&#x27;, function($series){
    $series-&#x3E;pushCriteria(new Criterias\Name(&#x27;Africa&#x27;));
    $series-&#x3E;pushCriteria(new Criterias\Data([106, 107, 111, 133, 221, 767, 1766]));
});

$chart-&#x3E;pushSubset(&#x27;series&#x27;, function($series){
    $series-&#x3E;pushCriteria(new Criterias\Name(&#x27;Europe&#x27;));
    $series-&#x3E;pushCriteria(new Criterias\Data([163, 203, 276, 408, 547, 729, 628]));
});

$chart-&#x3E;pushSubset(&#x27;series&#x27;, function($series){
    $series-&#x3E;pushCriteria(new Criterias\Name(&#x27;America&#x27;));
    $series-&#x3E;pushCriteria(new Criterias\Data([18, 31, 54, 156, 339, 818, 1201]));
});

$chart-&#x3E;pushSubset(&#x27;series&#x27;, function($series){
    $series-&#x3E;pushCriteria(new Criterias\Name(&#x27;Oceania&#x27;));
    $series-&#x3E;pushCriteria(new Criterias\Data([2, 2, 2, 6, 13, 30, 46]));
});

return $chart-&#x3E;render();