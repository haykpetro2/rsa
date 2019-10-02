<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title', trans('Halk Insurance'))</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon.png?v=1">
    <link rel="icon" type="image/png" href="/favicon-32x32.png?v=1" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png?v=1" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg?v=1" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Styles -->
    <link href="css/base.css" rel="stylesheet">
    <link href="css/vendor.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="/">Halk <b>Insurance</b></a>
    </div><!-- /.login-logo -->

    @yield('content')

</div><!-- /.login-box -->
<!-- JavaScripts -->
<script src="js/base.js"></script>
<script src="js/vendor.js"></script>
<script src="js/app.js"></script>
</body>
</html>