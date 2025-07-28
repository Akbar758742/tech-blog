
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">


<!-- suchana/index.html  22 Nov 2019 04:08:03 GMT -->
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Suchana is an online blog, news & magazine dedicated to different categories html template">

    <title>Suchana - Blog, News & Magazine HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend')}}/images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!--Default CSS-->
    <link href="{{asset('frontend')}}/css/default.css" rel="stylesheet" type="text/css">

    <!--Custom CSS-->
    <link href="{{asset('frontend')}}/css/style.css" rel="stylesheet" type="text/css">

    <!--Plugin CSS-->
    <link href="{{asset('frontend')}}/css/plugin.css" rel="stylesheet" type="text/css">

    <!--Font Icons-->
    <link href="{{asset('frontend')}}/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body class="home-default">

	<!--PRELOADER-->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!--*Header*-->
    @include('frontend.include.header')
    <!--* End Header*-->

   
   {{-- mainContent --}}
   @yield('mainContent')
   {{-- mainContent end--}}
    <!--*Footer*-->
   @include('frontend.include.footer')
    <!--* End Footer*-->

    <!-- back to top -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="" data-placement="left">
        <span class="fa fa-arrow-up"></span>
    </a>

    <!-- search popup -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!--*Scripts*-->
    <!-- Latest jquery --><script src="{{asset('frontend')}}/js/jquery-3.2.1.min.js"></script>
    <!-- Plugin Jquery --><script src="{{asset('frontend')}}/js/plugin.js"></script>
    <!-- custom nav jquery --><script src="{{asset('frontend')}}/js/custom-nav.js"></script>
    <!-- main default Jquery --><script src="{{asset('frontend')}}/js/main.js"></script>
</body>


<!-- suchana/index.html  22 Nov 2019 04:08:35 GMT -->
</html>