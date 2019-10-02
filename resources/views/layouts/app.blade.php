<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title', trans('Halk Insurance'))</title>

    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('apple-touch-icon.png?v=1')}}">
    <link rel="icon" type="image/png" href="{{asset('favicon-32x32.png?v=1')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('favicon-16x16.png?v=1')}}" sizes="16x16">
    <link rel="manifest" href="{{asset('manifest.json')}}">
    <link rel="mask-icon" href="{{asset('safari-pinned-tab.svg?v=1')}}" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Styles -->
    <link href="{{asset('css/base.css')}}" rel="stylesheet">
    <link href="{{asset('css/vendor.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/lightbox.css')}}" rel="stylesheet">
    <link href="{{asset('css/lsb.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <!-- Header -->
    @include('_partials.header')

    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    @yield('page_header', trans('Halk Insurance'))
                    <small>@yield('page_subheader', '')</small>
                </h1>
            </section>

            <!-- Main content -->
            <section id="main-content" class="content">
                <div class="box box-default">
                    <div class="box-body">
                        @include('_partials.errors')
                        @include('_partials.flash')
                        @yield('content')
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </section><!-- /.content -->
        </div><!-- /.container -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('_partials.footer')

</div><!-- ./wrapper -->
<!-- JavaScripts -->
<script src="{{asset('js/base.js')}}"></script>
<script src="{{asset('js/vendor.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/lightbox.min.js')}}"></script>
<script src="{{asset('js/lsb.js')}}"></script>
<script>
    $(window).on('load',function() {
        $.fn.lightspeedBox();
    });
    $.fn.lightspeedBox({
        showImageTitle: false,
        showImageCount: true,
        showDownloadButton: true,
        showAutoPlayButton: true,
        autoPlayback: false,
        playbackTiming: 3500,
        zIndex: 30,
        locale: {
            nextButton: 'След',
            prevButton: 'Пред',
            closeButton: 'Закрыть',
            downloadButton: 'Скачать',
            noImageFound: 'Не найдено',
            autoplayButton: 'Автовоспроизведение',
            playButton: 'Автовоспроизведение'
        }
    });
</script>
@yield('scripts')
</body>
</html>