<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Российское страховое агентство</title>
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('img/logo.ico')}}">
    <!--  Font Family -->
    <link href="https://fonts.googleapis.com/css?family=Charm:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">

    <!-- CSS ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/pe-icon-7-stroke.css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/default.css')}}">
    <!-- Modernizer JS -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
<div class="container-fluid error-page">
    <div class="row d-flex align-items-center p-4">
        <div class="col-lg-2 col-md-3 ml-5 mob_logo">
            <a href="{{route('index')}}" class="logo"><img src="{{asset('img/logo.svg')}}" alt="Logo"></a>
        </div>
        <div class="col-lg-9 col-md-8">
            <div class="nav-menu cssmenu menu-line-on" id="header-menu-wrap">
                <ul class="menu list-inline text-right">
                    <li class="sidebar-menu">
                        <span id="sidebar_menu_icon"><img src="{{asset('img/menu.svg')}}" class="shadowed-menu" alt="menu"></span></li>
                </ul>
            </div><!-- #header-menu-wrap -->
        </div><!-- .col-lg-10 -->

    </div><!-- .row -->
    <div class="js-offcanvas-menu  header-only-side-nav" id="js_offcanvas_menu">
        <div class="offcanvas-content">
            <span class="js-offcanvas-close text-white"><i class="pe-7s-close"></i></span>
            <div class="contact-information rounded pl-0">

                <ul>
                    <li><a href="{{route('osagoForm1')}}">ОСАГО</a></li>
                    <li><a href="{{route('casco')}}">КАСКО</a></li>
                    <li><a href="{{route('travel')}}">Путешествия</a></li>
                    <li><a href="{{route('soon')}}">Спорт</a></li>
                    <li><a href="{{route('estate')}}">Имущество</a></li>
                    <li><a href="{{route('policy')}}">Политика конфиденциальности</a></li>
                    <li><a href="{{route('property')}}">Реквизиты</a></li>
                    <li><a href="{{route('contact')}}">Контакты</a></li>
                </ul>
                <a href="javascript:void(0);" class="btn btn-white" data-toggle="modal" data-target="#becomeAgent">Стать нашим агентом</a>

            </div>
        </div><!-- header-icon -->
    </div><!-- js-offcanvas-menu -->
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="hero-one-content">
                <p class="text-white bordered pl-4 mb-30 w-50">Раздел в разработке</p>
                <p class="text-white pl-4 pb-200 w-50">В данный момент мы работаем, чтобы данная услуга как можно скорее появилась на сайте</p>
            </div>
        </div>
    </div><!-- row -->
</div><!-- .container -->

<div class="error-body has-color d-flex align-items-center position-absolute soon">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3 col-md-4 col-8 col-sm-4 col-xl-2 mx-auto">
                <a href="{{route('index')}}" class="btn w-100 btn-outline-light border error-page">На главную</a>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- error-body -->

<div class="modal fade" id="becomeAgent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content w-88 mx-auto">
            <div class="modal-header">
                <div class="container-fluid">
                    <h5 class="modal-title d-block w-100 text-center py-4" id="exampleModalCenterTitle">Ваш
                        телефон</h5>
                    <p class="w-100 text-center">Пожалуйста, введите корректный номер.</p>
                    <p class="w-100 text-center">На него перезвонит менеджер.</p>
                </div>
            </div>
            <div class="modal-body pb-0">
                <div class="container-fluid">
                    <form action="{{action('OrdersController@postOsago2')}}" method="post" class="simple_form">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" required placeholder="Ваш город">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control phone_number" name="phone" required placeholder="+7 (000) 0000000">
                        </div>
                        <button type="submit" class="btn d-block w-100 light-blue submit1">Отправить</button>
                        <div class="form-group form-check mt-4">
                            <label class="check w-88"><span>Согласен на обработку персональных данных в соответствии с <a
                                            href="{{route('policy')}}" target="_blank" class="terms1">Политикой конфиденциальности сайта</a></span>
                                <input type="checkbox" checked class="agree1">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </form>
                    {{--                        {!! Form::close() !!}--}}
                </div>


            </div>
        </div>
    </div>
</div>
<!--  JS -->
<script src="{{asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<!-- Plugins JS -->
<script src="{{asset('js/plugins.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('js/main.js')}}"></script>

</body>

</html>
