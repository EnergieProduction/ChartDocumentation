$chart = app(&#x27;chart&#x27;);

$chart-&#x3E;pushSubset(&#x27;title&#x27;, function($title){
    $title-&#x3E;pushCriteria(new Criterias\Text(&#x27;Solar Employment Growth by Sector, 2010-2016&#x27;));
});

$chart-&#x3E;pushSubset(&#x27;subtitle&#x27;, function($subtitle){
    $subtitle-&#x3E;pushCriteria(new Criterias\Text(&#x27;Source: thesolarfoundation.com&#x27;));
});

$chart-&#x3E;pushSubset(&#x27;yAxis.title&#x27;, function($title){
    $title-&#x3E;pushCriteria(new Criterias\Text(&#x27;Number of Employees&#x27;));
});

$chart-&#x3E;pushSubset(&#x27;legend&#x27;, function($legend){
    $legend-&#x3E;pushCriteria(new Criterias\Layout(&#x27;vertical&#x27;));
    $legend-&#x3E;pushCriteria(new Criterias\Align(&#x27;right&#x27;));
    $legend-&#x3E;pushCriteria(new Criterias\VerticalAlign(&#x27;middle&#x27;));
});

$chart-&#x3E;pushSubset(&#x27;plotOptions.series&#x27;, function($plotOptions){
    $plotOptions-&#x3E;pushCriteria(new Criterias\PointStart(2010));
});

$chart-&#x3E;pushSubset(&#x27;series&#x27;, function($series){
    $series-&#x3E;pushCriteria(new Criterias\Name(&#x27;Installation&#x27;));
    $series-&#x3E;pushCriteria(new Criterias\Data([43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]));
});

$chart-&#x3E;pushSubset(&#x27;series&#x27;, function($series){
    $series-&#x3E;pushCriteria(new Criterias\Name(&#x27;Manufacturing&#x27;));
    $series-&#x3E;pushCriteria(new Criterias\Data([24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]));
});

$chart-&#x3E;render(); 