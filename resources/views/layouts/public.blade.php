<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title', trans('Halk Insurance'))</title>
    <!-- Styles -->
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/vendor.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue layout-top-nav" style="padding-top:50px;">
<div class="wrapper">

    <!-- Header -->
    <header class="main-header">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    @if(Auth::check())
                        <a href="{{action('DashboardController@index')}}" class="navbar-brand"><b>HALK</b>24</a>
                    @else
                        <a href="/" class="navbar-brand"><b>HALK</b>24</a>
                    @endif
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            {{link_to('help#calc-osago', trans('general.Calc OSAGO'))}}
                        </li>
                        <li>
                            {{link_to('help#calc-kbm', trans('general.Calc KBM'))}}
                        </li>
                        <li>
                            {{link_to('help#to', trans('general.TO'))}}
                        </li>
                        <li>
                            {{link_to('help#companies', trans('general.Companies'))}}
                        </li>
                        <li>
                            {{link_to('http://asn-news.ru', trans('general.News'), array('target'=>'_blank'))}}
                        </li>
                        <li>
                            {{link_to('help#delivery', trans('general.Delivery'))}}
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                @if(Auth::check())
                    <a href="{{action('DashboardController@index')}}" class="btn btn-warning btn-flat navbar-right navbar-btn" style="margin-right: 0;"><i class="fa fa-sign-in"></i> {{trans('general.Back to the System')}}</a>
                @else
                    <a href="{{url('login')}}" class="btn btn-warning btn-flat navbar-right navbar-btn" style="margin-right: 0;"><i class="fa fa-sign-in"></i> {{trans('general.Login')}}</a>
                @endif
            </div><!-- /.container-fluid -->
        </nav>
    </header>

    <div class="content-wrapper">
        <div class="container">
            <!-- Main content -->
            <section id="main-content" class="content">
                @yield('content')
            </section><!-- /.content -->
        </div><!-- /.container -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('_partials.footer')

</div><!-- ./wrapper -->
<!-- JavaScripts -->
<script src="/js/base.js"></script>
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
@yield('scripts')
</body>
</html>