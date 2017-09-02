<!DOCTYPE html>
<!--[if IE 8]> <html lang="{{ app()->getLocale() }}" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="{{ app()->getLocale() }}" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="{{ app()->getLocale() }}"> <!--<![endif]-->
<head>
    <title>@yield('title')</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    {{Html::style('assets/plugins/bootstrap/css/bootstrap.min.css')}}
    <!-- Plugins CSS -->
    {{Html::style('assets/plugins/font-awesome/css/font-awesome.css')}}
    {{Html::style('assets/plugins/prism/prism.css')}}
    {{Html::style('assets/plugins/elegant_font/css/style.css')}}

    <!-- Theme CSS -->
    {{-- <link id="theme-style" rel="stylesheet" href="/assets/css/styles.css"> --}}
    {{Html::style('assets/css/styles.css')}}
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{Html::script("assets/plugins/jquery-1.12.3.min.js")}}
    {{Html::script("assets/plugins/bootstrap/js/bootstrap.min.js")}}

</head>

<body class="@yield('doc-class')" cz-shortcut-listen="true">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="{{route('home')}}">
                            <span aria-hidden="true" class="icon_documents_alt icon"></span>
                            <span class="text-highlight">energieproduction</span><span class="text-bold">chart</span>
                        </a>
                    </h1>
                </div><!--//branding-->
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">@yield('doc-title')</li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><i class="icon fa @yield('doc-logo')"></i> @yield('doc-title')</h1>
                </div><!--//doc-header-->
                <div class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">
                            @yield('doc-body')
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    <div class="doc-sidebar hidden-xs">
                        <nav id="doc-nav">
                            @yield('doc-nav')
                        </nav>
                    </div><!--//doc-sidebar-->
                </div><!--//doc-body-->
            </div><!--//container-->
        </div><!--//doc-wrapper-->
    </div><!--//page-wrapper-->

    <footer id="footer" class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com/" targe="_blank">Xiaoying Riley</a> for developers</small>

        </div><!--//container-->
    </footer><!--//footer-->



    <!-- Main Javascript -->
    {{Html::script("assets/plugins/prism/prism.js")}}
    {{Html::script("assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js")}}
    {{Html::script("assets/plugins/jquery-match-height/jquery.matchHeight-min.js")}}
    {{Html::script("assets/js/main.js")}}
    @yield('scripts')

</body>
</html>

