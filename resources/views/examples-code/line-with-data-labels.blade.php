$chart = app(&#x27;chart&#x27;);

$chart-&#x3E;pushSubset(&#x27;title&#x27;, function($title){
    $title-&#x3E;pushCriteria(new Criterias\Text(&#x27;Monthly Average Temperature&#x27;));
});

$chart-&#x3E;pushSubset(&#x27;subtitle&#x27;, function($subtitle){
    $subtitle-&#x3E;pushCriteria(new Criterias\Text(&#x27;Source: WorldClimate.com&#x27;));
});

$chart-&#x3E;pushSubset(&#x27;xAxis&#x27;, function($title){
    $title-&#x3E;pushCriteria(new Criterias\Categories([&#x27;Jan&#x27;, &#x27;Feb&#x27;, &#x27;Mar&#x27;, &#x27;Apr&#x27;, &#x27;May&#x27;, &#x27;Jun&#x27;, &#x27;Jul&#x27;, &#x27;Aug&#x27;, &#x27;Sep&#x27;, &#x27;Oct&#x27;, &#x27;Nov&#x27;, &#x27;Dec&#x27;]));
});

$chart-&#x3E;pushSubset(&#x27;yAxis.title&#x27;, function($title){
    $title-&#x3E;pushCriteria(new Criterias\Text(&#x27;Temperature (&#xB0;C)&#x27;));
});

$chart-&#x3E;pushSubset(&#x27;plotOptions.line.dataLabels&#x27;, function($title){
    $title-&#x3E;pushCriteria(new Criterias\Enabled(true));
});

$chart-&#x3E;pushSubset(&#x27;plotOptions.line&#x27;, function($title){
    $title-&#x3E;pushCriteria(new Criterias\EnableMouseTracking(false));
});

$chart-&#x3E;pushSubset(&#x27;series&#x27;, function($series){
    $series-&#x3E;pushCriteria(new Criterias\Name(&#x27;Tokyo&#x27;));
    $series-&#x3E;pushCriteria(new Criterias\Data([7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]));
});

$chart-&#x3E;pushSubset(&#x27;series&#x27;, function($series){
    $series-&#x3E;pushCriteria(new Criterias\Name(&#x27;London&#x27;));
    $series-&#x3E;pushCriteria(new Criterias\Data([3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]));
});

$chart-&#x3E;render();