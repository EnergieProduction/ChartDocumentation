@extends('layouts.documentation')

@section('doc-title', 'Examples')
@section('doc-logo', 'icon_datareport_alt')
@section('doc-class', 'body-blue')

@section('doc-nav')
<ul id="doc-menu" class="nav doc-menu affix-top" data-spy="affix">
    <li @if($chart->type() == 'line') class='selected active' @endif>
        <a href="#">@lang('examples.line.title')</a>
        <ul class="nav doc-sub-menu">
            <li @if($chart->type() == 'line' && $chart->subType() == 'basic') class='active' @endif>
                <a href="{{route('examples.selected', ['line', 'basic'])}}">@lang('examples.line.basic.title')</a>
            </li>
            <li @if($chart->type() == 'line' && $chart->subType() == 'with-data-labels') class='active' @endif>
                <a href="{{route('examples.selected', ['line', 'with-data-labels'])}}">@lang('examples.line.with-data-labels.title')</a>
            </li>            
        </ul><!--//nav-->
    </li>
    <li @if($chart->type() == 'area') class='selected active' @endif>
        <a href="#">Area Charts</a>
        <ul class="nav doc-sub-menu">
            <li @if($chart->type() == 'area' && $chart->subType() == 'basic') class='active' @endif>
                <a href="{{route('examples.selected', ['area', 'basic'])}}">@lang('examples.area.basic.title')</a>
            </li>   
            <li @if($chart->type() == 'area' && $chart->subType() == 'stacked') class='active' @endif>
                <a href="{{route('examples.selected', ['area', 'stacked'])}}">@lang('examples.area.stacked.title')</a>
            </li>    
            <li @if($chart->type() == 'area' && $chart->subType() == 'range-and-line') class='active' @endif>
                <a href="{{route('examples.selected', ['area', 'range-and-line'])}}">@lang('examples.area.range-and-line.title')</a>
            </li>                               
        </ul><!--//nav-->
    </li>
    <li @if($chart->type() == 'scatter') class='selected active' @endif>
        <a href="#">Scatter Charts</a>
        <ul class="nav doc-sub-menu">
            <li @if($chart->type() == 'scatter' && $chart->subType() == 'plot') class='active' @endif>
                <a href="{{route('examples.selected', ['scatter', 'plot'])}}">@lang('examples.scatter.plot.title')</a>
            </li>   
        </ul><!--//nav-->
    </li>    
</ul><!--//doc-menu-->
@endsection

@section('doc-body')
<section id="line" class="doc-section">
	<h2 class="section-title">@lang('examples.'.$chart->type().'.title')</h2>
	<div id='basic-line' class="section-block">
		<h3 class="block-title">@lang('examples.'.$chart->type().'.'.$chart->subType().'.title')</h3>
		<div id='chart'></div>
	</div>
	<div id="php" class="section-block">
	    <div class="code-block">
	        <h6>PHP Code</h6>
	        <pre><code class="language-php">@include('examples-code.'.$chart->type().'-'.$chart->subType())</code></pre>
	    </div><!--//code-block-->
	</div>
</section>
@endsection

@section('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
$(function () {
    $(chart).highcharts({!! $chart->render() !!});
});
</script>
@endsection


