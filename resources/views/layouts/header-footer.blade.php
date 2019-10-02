<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Российское страховое агентство</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@lang('pub.page.desc')"/>
    <meta name="robots" content="noodp"/>
    <link rel="canonical" href="@lang('pub.page.url')"/>
    <meta name="author" content="12 Company https://www.12company.ru/">
    <meta property="og:locale" content="ru_RU"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="@yield('title', trans('pub.page.title'))"/>
    <meta property="og:description" content="@lang('pub.page.desc')"/>
    <meta property="og:url" content="@lang('pub.page.url')"/>
    <meta property="og:site_name" content="@lang('pub.page.title')"/>
    <meta property="og:image" content="@lang('pub.page.url')/images/cover.jpg"/>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/default.css')}}">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
    <!-- Modernizer JS -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!-- WhatsHelp.io widget -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146792819-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-146792819-1');
    </script>
    <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(43124164, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/43124164" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

    <script type="text/javascript" async>
        (function () {
            var options = {
                whatsapp: "+79615882999", // WhatsApp number
                telegram: "https://t.me/RSAstrahovanie", // Telegram bot username
                call_to_action: "", // Call to action
                button_color: "#129BF4", // Color of button
                position: "right", // Position may be 'right' or 'left'
                order: "whatsapp,telegram", // Order of buttons
            };
            var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /WhatsHelp.io widget -->
</head>

<body>

<!-- Main Wrapper -->
<div id="main-wrapper" class="home-consulting ">
    <!-- Header Section Start -->
    <header class="header-section">
        <nav class="header-nav sticky-on">
            <div class="container-fluid">
                <div class="row d-flex align-items-center p-4">
                    <div class="col-lg-2 col-md-3 m-pl-0">
                        <a href="{{route('index')}}" class="logo">
                            <img src="{{asset('img/logo.svg')}}" class="big-logo" alt="Logo">
                            <img src="{{asset('img/LogoSmall.svg')}}" class="small-logo d-none" alt="">
                        </a>
                    </div>
                    <div class="col-lg-10 col-md-9">
                        <div class="nav-menu cssmenu menu-line-on" id="header-menu-wrap">
                            <ul class="menu list-inline text-right">
                                <li class="sidebar-menu">
                                    <span id="sidebar_menu_icon"><img src="{{asset('img/menu.svg')}}"
                                                                      class="shadowed-menu" alt="menu"></span></li>
                            </ul>
                        </div><!-- #header-menu-wrap -->
                    </div><!-- .col-lg-10 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </nav><!-- .header-nav -->
    </header><!-- Header Section End -->


    <!-- js-offcanvas-menu -->
    <div class="js-offcanvas-menu  header-only-side-nav" id="js_offcanvas_menu">
        <div class="offcanvas-content">
            <span class="js-offcanvas-close text-white"><i class="pe-7s-close"></i></span>
            <div class="contact-information rounded px-0">

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

                <a href="javascript:void(0);" class="btn btn-white" id="canvas_modal" data-toggle="modal" data-target="#becomeAgent">Стать нашим агентом</a>

            </div>
        </div><!-- header-icon -->
    </div><!-- js-offcanvas-menu -->


    @yield('content')


    <footer class="js-footer-area bg-blue">
        <div class="js-footer-top pt-100">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="js-footer-widget">
                            <h4 class="text-white">Страхование</h4>
                            <ul class="usefull-link">
                                <li><a href="{{route('osagoForm1')}}">ОСАГО</a></li>
                                <li><a href="{{route('casco')}}">КАСКО</a></li>
                                <li><a href="{{route('soon')}}">Спорт</a></li>
                                <li><a href="{{route('travel')}}">Путешествия</a></li>
                                {{--                                <li><a href="">Недвижимость</a></li>--}}
                                <li><a href="{{route('estate')}}">Имущество</a></li>
                            </ul>
                        </div>
                    </div><!-- col-lg-2 -->
                    

                    <div class="col-lg-3 col-md-6">

                        <div class="js-footer-widget  widget-opening">
                            <h4 class="text-white">График работы:</h4>
                            <ul>
                                <li>Пн - Сб<span>8:30 - 19:00</span></li>

                            </ul>
                            <h4 class="text-white mb-30">Адрес:</h4>
                            <ul>

                                <li>г. Краснодар, ул. Ленина 90</li>
                            </ul>
                        </div>
                    </div><!-- col-lg-3 -->
                    <div class="col-lg-4 offset-lg-1 col-md-6">

                        <div class="js-footer-widget js-contact-info">
                            <h4 class="text-white">Контакты:</h4>
                            <ul>
                                <li><a href="tel:+79615882999">+7 961 588 29 99</a></li>
                                <li><a href="mailto:rsa.strahovanie@gmail.com">rsa.strahovanie@gmail.com</a></li>
                                <li><a href="{{route('property')}}">Реквизиты</a></li>
                                <li><a href="{{route('policy')}}">Политика конфиденциальности</a></li>
                            </ul>

                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- conatiner -->
        </div><!-- footer-top -->
        <div class="copyright bg-blue">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 py-3">
                        <p>Данный интернет-сайт носит информационный характер и не является офертой, определяемой
                            положениями ст. 437 ГК РФ.
                            Никакие материалы этого сайта, текстовые или графические, не могут быть скопированы либо
                            опубликованы в любой форме.</p>
                    </div>
                    <div class="col-lg-3">
                        <ul class="list-inline social-icon">
                            <li class="mr-3"><a href="https://t.me/RSAstrahovanie" target="_blank"><img src="{{asset('img/telegram.svg')}}" alt=""></a></li>
                            <li><a href="https://instagram.com/strahovanie_centr?igshid=12kwx0cfy6tzr" target="_blank"><img src="{{asset('img/Footer_Instagram.svg')}}" alt=""></a></li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <p class="made_by text-center w-100">&copy; 2019
                        <script>
                            new Date().getFullYear() > 2019 && document.write("-" + new Date().getFullYear());
                        </script>
                        Российское страховое агентство. Все права защищены.
                    </p>
                </div>
            </div><!-- container -->
        </div><!-- copyright -->
    </footer> <!-- footer-area -->

</div>
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
                    <form id="agent_form" class="simple_form">
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


<span class="scrolltop bg-blue"><i class="pe-7s-angle-up"></i></span>

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
<script src="{{asset('js/lightbox.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset('js/jquery.inputmask.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/jquery.validate.js')}}"></script>
<script>
    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(".phone_number").inputmask("+7 (999) 9999999");
        var agree= $('input.agree');
        $('input.agree').on('click', function () {
            if(agree.is(':checked')){
                $('button.submit').prop('disabled',false)
            }
            else {
                $('button.submit').prop('disabled',true)
            }
        });
        var agree1 = $('input.agree1');
        $('input.agree1').on('click', function () {
            if(agree1.is(':checked')){
                $('button.submit1').prop('disabled',false)
            }
            else {
                $('button.submit1').prop('disabled',true)
            }
        });
        $("form button.submit1").click(function (e) {

            e.preventDefault();
            if(! $('form#agent_form').valid()) {

                return false;
            }
            $.ajax({
                type: "POST",
                url: "o/osago2",
                data: $('form#agent_form').serialize(),

                success: function () {

                    Swal({
                        title: 'Большое спасибо,',
                        text: 'С вами свяжется в ближайшее время наш менеджер',
                        type: 'success',
                        timer: 1000,
                        showConfirmButton: false
                    });
                }

            })
            ;


        });
    });
</script>
@yield('script')


</body>

</html>
