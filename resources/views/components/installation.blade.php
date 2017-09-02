@extends('layouts.documentation')

@section('doc-title', 'Installation')
@section('doc-logo', 'fa-paper-plane')
@section('doc-class', 'body-green')

@section('doc-nav')
<ul id="doc-menu" class="nav doc-menu affix-top" data-spy="affix">
    <li><a class="scrollto" href="#download-section">Download</a></li>
    <li>
        <a class="scrollto" href="#installation-section">Installation</a>
        <ul class="nav doc-sub-menu">
            <li><a class="scrollto" href="#step1">Step One</a></li>
            <li><a class="scrollto" href="#step2">Step Two</a></li>
            <li><a class="scrollto" href="#step3">Step Three</a></li>
        </ul><!--//nav-->
    </li>
</ul><!--//doc-menu-->
@endsection

@section('doc-body')
<section id="download-section" class="doc-section">
    <h2 class="section-title">Download</h2>
    <div class="section-block">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis. Curabitur aliquet pulvinar ultrices. Etiam at posuere leo. Proin ultrices ex et dapibus feugiat <a href="#">link example</a> aenean purus leo, faucibus at elit vel, aliquet scelerisque dui. Etiam quis elit euismod, imperdiet augue sit amet, imperdiet odio. Aenean sem erat, hendrerit  eu gravida id, dignissim ut ante. Nam consequat porttitor libero euismod congue.
        </p>
        <a href="http://themes.3rdwavemedia.com" class="btn btn-green" target="_blank"><i class="fa fa-github-alt"></i> Download Chart</a>
    </div>
</section>
<section id="installation-section" class="doc-section">
    <h2 class="section-title">Installation</h2>
    <div id="step1" class="section-block">
        <h3 class="block-title">Step One</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.
        </p>
        <div class="code-block">
            <h6>Example:</h6>
            <p><code>composer require energieproduction/chart</code></p>
        </div><!--//code-block-->
        <p>qsd qsd qdqd qsd sqfgds sdgf dsfdsf sdf s</p>
        <div class="code-block">
            <h6>Example:</h6>
            <p><code>"energieproduction/chart": "3.*"</code></p>
        </div><!--//code-block-->
    </div><!--//section-block-->
    <div id="step2" class="section-block">
        <h3 class="block-title">Step Two</h3>
        <p>In /config/app.php add ChartServiceProvider:</p>
        <div class="code-block">
            <h6>Example:</h6>
            <p><code>EnergieProduction\Chart\ChartServiceProvider::class,</code></p>
        </div><!--//code-block-->
    </div><!--//section-block-->
    <div id="step3" class="section-block">
        <h3 class="block-title">Step Three</h3>
        <p>Do not forget to use the scripts from Highcharts on the pages that contains a chart</p>
        <div class="code-block">
            <h6>Example:</h6>
            <p><code>&#x3C;script src=&#x22;https://code.highcharts.com/highcharts.js&#x22;&#x3E;&#x3C;/script&#x3E;<br>
&#x3C;script src=&#x22;https://code.highcharts.com/highcharts-more.js&#x22;&#x3E;&#x3C;/script&#x3E;<br>
&#x3C;script src=&#x22;https://code.highcharts.com/modules/exporting.js&#x22;&#x3E;&#x3C;/script&#x3E;</code></p>
        </div><!--//code-block-->
    </div><!--//section-block-->
</section>
@endsection
