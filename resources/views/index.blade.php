<!DOCTYPE html>
<!--[if IE 8]> <html lang="{{ app()->getLocale() }}" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="{{ app()->getLocale() }}" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="{{ app()->getLocale() }}"> <!--<![endif]-->
<head>
    <title>...</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="landing-page">

    <!--FACEBOOK LIKE BUTTON JAVASCRIPT SDK-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="page-wrapper">

        <!-- ******Header****** -->
        <header class="header text-center">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <span aria-hidden="true" class="icon_documents_alt icon"></span>
                        <span class="text-highlight">energieproduction</span><span class="text-bold">chart</span>
                    </h1>
                </div><!--//branding-->
                <div class="tagline">
                    <p>Documentation du package energieproduction/chart</p>
                    <p>Designed with <i class="fa fa-heart"></i> for developers</p>
                </div><!--//tagline-->
                <div class="social-container">
                    <div class="twitter-tweet">
                        <a href="https://twitter.com/share" class="twitter-share-button" data-text="PrettyDocs - A FREE #Bootstrap theme for project documentations #Responsive" data-via="3rdwave_themes">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </div><!--//tweet-->
                    <div class="fb-like" data-href="http://themes.3rdwavemedia.com" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                 </div><!--//social-container-->
            </div><!--//container-->
        </header><!--//header-->

        <section class="cards-section text-center">
            <div class="container">
                <h2 class="title">Getting started is easy!</h2>
                <div class="intro">
                    <p>Welcome to prettyDocs. This landing page is an example of how you can use a card view to present segments of your documentation. You can customise the icon fonts based on your needs.</p>
                    <div class="cta-container">
                        <a class="btn btn-primary btn-cta" href="http://themes.3rdwavemedia.com/" target="_blank"><i class="fa fa-github-alt"></i> Download Now</a>
                    </div><!--//cta-container-->
                </div><!--//intro-->
                <div id="cards-wrapper" class="cards-wrapper row">
                    <div class="item item-green col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-paper-plane"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Installation</h3>
                            <p class="intro">Demo example, consectetuer adipiscing elit</p>
                            <a class="link" href="{{route('installation')}}"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-purple item-2 col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_puzzle_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Documentation</h3>
                            <p class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                            <a class="link" href="{{route('documentation')}}"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-blue col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_datareport_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Examples</h3>
                            <p class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                            <a class="link" href="{{route('examples')}}"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                </div><!--//cards-->

            </div><!--//container-->
        </section><!--//cards-section-->
    </div><!--//page-wrapper-->

    <footer class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a> for developers</small>

        </div><!--//container-->
    </footer><!--//footer-->


    <!-- Main Javascript -->
    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html>

