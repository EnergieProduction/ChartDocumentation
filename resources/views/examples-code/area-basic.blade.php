$chart = app(&#x27;chart&#x27;);

$chart-&#x3E;pushSubset(&#x27;chart&#x27;, function($title){
    $title-&#x3E;pushCriteria(new Criterias\Type(&#x27;area&#x27;));
});

$chart-&#x3E;pushSubset(&#x27;title&#x27;, function($title){
    $title-&#x3E;pushCriteria(new Criterias\Text(&#x27;US and USSR nuclear stockpiles&#x27;));
});

$chart-&#x3E;pushSubset(&#x27;subtitle&#x27;, function($subtitle){
    $subtitle-&#x3E;pushCriteria(new Criterias\Text(&#x27;Source: thebulletin.metapress.com&#x27;));
});

$chart-&#x3E;pushSubset(&#x27;xAxis&#x27;, function($title){
    $title-&#x3E;pushCriteria(new Criterias\AllowDecimals(false));
});

$chart-&#x3E;pushSubset(&#x27;yAxis.title&#x27;, function($title){
    $title-&#x3E;pushCriteria(new Criterias\Text(&#x27;Nuclear weapon states&#x27;));
});

$chart-&#x3E;pushSubset(&#x27;tooltip&#x27;, function($title){
    $title-&#x3E;pushCriteria(new Criterias\PointFormat(&#x27;{series.name} produced &#x3C;b&#x3E;{point.y:,.0f}&#x3C;/b&#x3E;&#x3C;br/&#x3E;warheads in {point.x}&#x27;));
});

$chart-&#x3E;pushSubset(&#x27;plotOptions.area&#x27;, function($title){
    $title-&#x3E;pushCriteria(new Criterias\PointStart(1940));
});

$chart-&#x3E;pushSubset(&#x27;plotOptions.area.marker&#x27;, function($title){
    $title-&#x3E;pushCriteria(new Criterias\Enabled(false));
    $title-&#x3E;pushCriteria(new Criterias\Symbol(&#x27;circle&#x27;));
    $title-&#x3E;pushCriteria(new Criterias\Radius(2));
});

$chart-&#x3E;pushSubset(&#x27;plotOptions.area.marker.states.hover&#x27;, function($title){
    $title-&#x3E;pushCriteria(new Criterias\Enabled(true));
});

$chart-&#x3E;pushSubset(&#x27;series&#x27;, function($series){
    $series-&#x3E;pushCriteria(new Criterias\Name(&#x27;USA&#x27;));
    $series-&#x3E;pushCriteria(new Criterias\Data([null, null, null, null, null, 6, 11, 32, 110, 235, 369, 640,
    1005, 1436, 2063, 3057, 4618, 6444, 9822, 15468, 20434, 24126,
    27387, 29459, 31056, 31982, 32040, 31233, 29224, 27342, 26662,
    26956, 27912, 28999, 28965, 27826, 25579, 25722, 24826, 24605,
    24304, 23464, 23708, 24099, 24357, 24237, 24401, 24344, 23586,
    22380, 21004, 17287, 14747, 13076, 12555, 12144, 11009, 10950,
    10871, 10824, 10577, 10527, 10475, 10421, 10358, 10295, 10104]));
});

$chart-&#x3E;pushSubset(&#x27;series&#x27;, function($series){
    $series-&#x3E;pushCriteria(new Criterias\Name(&#x27;USSR/Russia&#x27;));
    $series-&#x3E;pushCriteria(new Criterias\Data([null, null, null, null, null, null, null, null, null, null,
    5, 25, 50, 120, 150, 200, 426, 660, 869, 1060, 1605, 2471, 3322,
    4238, 5221, 6129, 7089, 8339, 9399, 10538, 11643, 13092, 14478,
    15915, 17385, 19055, 21205, 23044, 25393, 27935, 30062, 32049,
    33952, 35804, 37431, 39197, 45000, 43000, 41000, 39000, 37000,
    35000, 33000, 31000, 29000, 27000, 25000, 24000, 23000, 22000,
    21000, 20000, 19000, 18000, 18000, 17000, 16000]));
});

$chart-&#x3E;render();