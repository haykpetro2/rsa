@extends('layouts.header-footer')
@section('content')
    <div id="hero-slider-style6" class="d-flex align-items-center osago osago_calculate">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="hero-one-content">
                        <p class="text-white bordered pl-4 mb-30 w-50">ОСАГО</p>
                        <p class="text-white pl-4 pb-200">Выберите одно из предложений
                            от лучших страховых кампаний</p>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- hero-slider     -->

    <div class="js-featured-services pb-35 osago osago_calculate">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-10 mx-auto">
                    <div class="row featured-services-row">
                        <div class="col-lg-12 p-40-30">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-header">

                                            <h5 class="text-red">АльфаСтрахование</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Крупнейшая российская страховая компания. Страховую деятельность осуществляют более 270 региональных представительств. Имеет репутацию надежной и устойчивой компании.</p>
                                            <h4><img class="d-inline-block" src="{{asset('img/icons/at-sign.png')}}" alt=""><a href="#">Электронный полис</a></h4>
                                            <h4><img class="d-inline-block" src="{{asset('img/icons/clock.png')}}" alt=""><a href="#">Быстрое оформление</a></h4>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{route('osagoForm1')}}" class="btn d-block w-100 light-blue">4350 ₽</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="text-red">АльфаСтрахование</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Крупнейшая российская страховая компания. Страховую деятельность осуществляют более 270 региональных представительств. Имеет репутацию надежной и устойчивой компании.</p>
                                            <h4><img class="d-inline-block" src="{{asset('img/icons/paper.png')}}" alt=""><a href="#" class="link-blue">Бумажный полис</a></h4>
                                            <h4><img class="d-inline-block" src="{{asset('img/icons/pie-chart.png')}}" alt=""><a href="#" class="link-blue pl-13">Стандартное оформление</a></h4>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{route('osagoForm2')}}" class="btn d-block w-100 dark-blue">4350 ₽</a>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="text-purple">НАСКО</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Успешно работает на рынке страховых услуг с 1996 года. Высокоразвитая филиальная сеть с оптимальной системой управления, эффективный сервис и персональный подход.</p>
                                            <h4><img class="d-inline-block" src="{{asset('img/icons/at-sign.png')}}" alt=""><a href="#">Электронный полис</a></h4>
                                            <h4><img class="d-inline-block" src="{{asset('img/icons/clock.png')}}" alt=""><a href="#">Быстрое оформление</a></h4>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{route('osagoForm1')}}" class="btn d-block w-100 light-blue">4700 ₽</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="text-purple">НАСКО</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Успешно работает на рынке страховых услуг с 1996 года. Высокоразвитая филиальная сеть с оптимальной системой управления, эффективный сервис и персональный подход.</p>
                                            <h4><img class="d-inline-block" src="{{asset('img/icons/paper.png')}}" alt=""><a href="#" class="link-blue">Бумажный полис</a></h4>
                                            <h4><img class="d-inline-block" src="{{asset('img/icons/pie-chart.png')}}" alt=""><a href="#" class="link-blue pl-13">Стандартное оформление</a></h4>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{route('osagoForm2')}}" class="btn d-block w-100 dark-blue">4700 ₽</a>
                                        </div>
                                    </div>
                                </div>--}}
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="text-orange">ЭРГО</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">На рынке страховых услуг с 1991 года. Имеет высокие рейтинги финансовой устойчивости: ruАА+ и ruА. Надежность группы ERGO подтверждена рейтингами международных агентств Standard & Poor`s (A) и Fitch (A+).</p>
                                            <h4><img class="d-inline-block" src="{{asset('img/icons/at-sign.png')}}" alt=""><a href="#">Электронный полис</a></h4>
                                            <h4><img class="d-inline-block" src="{{asset('img/icons/clock.png')}}" alt=""><a href="#">Быстрое оформление</a></h4>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{route('osagoForm1')}}" class="btn d-block w-100 light-blue">4700 ₽</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="text-orange">ЭРГО</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">На рынке страховых услуг с 1991 года. Имеет высокие рейтинги финансовой устойчивости: ruАА+ и ruА. Надежность группы ERGO подтверждена рейтингами международных агентств Standard & Poor`s (A) и Fitch (A+).</p>
                                            <h4><img class="d-inline-block" src="{{asset('img/icons/paper.png')}}" alt=""><a href="#" class="link-blue">Бумажный полис</a></h4>
                                            <h4><img class="d-inline-block" src="{{asset('img/icons/pie-chart.png')}}" alt=""><a href="#" class="link-blue pl-13">Стандартное оформление</a></h4>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{route('osagoForm2')}}" class="btn d-block w-100 dark-blue">4700 ₽</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- row -->
        </div><!-- container-fluid -->
    </div><!-- featured-services -->

    <div class="preview pb-105 osago osago_calculate">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-10 mx-auto">
                    <div class="row featured-services-row preview">
                        <div class="col-lg-12 p-40-30">
                            <div class="row mb-4">
                                <div class="col-lg-10 col-9"><h3 class="pl-3">Предварительный рассчет для:</h3></div>
                                <div class="col-lg-2 col-3"><h3 class="text-right">ID XXX XXX</h3></div>
                            </div>
                            <div class="row justify-content-center mb-4">
                                <div class="w-20">
                                    <p>Ваше местоположение:</p>
                                    <h3>Краснодар</h3>
                                </div>
                                <div class="w-20">
                                    <p>Регион регистрации собственника авто:</p>
                                    <h3>Краснодарский край</h3>
                                </div>
                                <div class="w-20">
                                    <p>Тип страховки:</p>
                                    <h3>Ограниченная</h3>
                                </div>
                                <div class="w-20">
                                    <p>Мощность автомобиля:</p>
                                    <h3>100 Л.С.</h3>
                                </div>
                                <div class="w-20">
                                    <p>Вероятная скидка КБМ:</p>
                                    <h3>50%</h3>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="w-20">
                                    <p>Период страхования:</p>
                                    <h3>12 Мес.</h3>
                                </div>
                                <div class="w-20">
                                    <p>Безаварийный стаж:</p>
                                    <h3>3 Года</h3>
                                </div>
                                <div class="w-20">
                                    <p>Стаж самого опытного водителя:</p>
                                    <h3>Более 3 лет</h3>
                                </div>
                                <div class="w-20">
                                    <p>Возраст самого младшего водителя:</p>
                                    <h3>До 22 лет</h3>
                                </div>
                                <div class="w-20">
                                    <a href="{{route('osago')}}" class="btn d-block w-100 change-button mt-2">Изменить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container-fluid -->
    </div>
@endsection