@extends('layouts.header-footer')
@section('content')
    <div id="hero-slider-style6" class="d-flex align-items-center osago main">
        <div class="container">
            <div class="row">
                <div class="col-lg-11">
                    <div class="hero-one-content">
                        <p class="mb-3 text-white w-75" id="index-p-1">Надежный сервис страхования онлайн</p>
                        <p class="text-white mb-4 bordered pl-4 w-50" id="index-p-2">Мы помогаем выбрать самые выгодные
                            предложения от лучших компаний</p>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>

    <div class="js-featured-services pb-100">
        <div class="container">
            <div class="row featured-services-row" id="services">
                <div class="col-lg-2 col-md-6 col-sm-4 p-0">
                    <div class="js-featured-services-item br-first">
                        <div class="js-featured-content">
                            <span class="js-featured-icon primary-color"><img src="{{asset('img/icons/Osago.svg')}}" alt="Icon"></span>
                            <p>Рассчитать и выбрать ОСАГО, а также оформить <span>электронный полис</span> менее чем за 5 мин</p>
                            <a href="{{route('osagoForm1')}}" class="btn-blue">ОСАГО</a>
                            <p class="price-from">От 1350 ₽</p>
                        </div>
                    </div>
                </div><!-- col-md-4 -->
                <div class="col-lg-2 col-md-6 col-sm-4 p-0">
                    <div class="js-featured-services-item">
                        <div class="js-featured-content">
                            <span class="js-featured-icon primary-color"><img src="{{asset('img/icons/Kasko.svg')}}" alt="Icon"></span>
                            <p>Рассчитать и выбрать КАСКО, а также получить индивидуальные предложения</p>
                            <a href="{{route('casco')}}" class="btn-blue">КАСКО</a>
                            <p class="price-from">От 12 950 ₽</p>
                        </div>
                    </div>
                </div><!-- col-md-4 -->
                <div class="col-lg-2 col-md-6 col-sm-4 p-0">
                    <div class="js-featured-services-item  br-third">
                        <div class="js-featured-content">
                            <span class="js-featured-icon primary-color"><img src="{{asset('img/icons/Travel.svg')}}" alt="Icon"></span>
                            <p>Рассчитать и выбрать страховку для путешествий, а также оформить <span>электронный полис</span></p>
                            <a href="{{route('travel')}}" class="btn-blue">Путешествия</a>
                            <p class="price-from">От 90 ₽</p>
                        </div>
                    </div>
                </div><!-- col-md-4 -->
                <div class="col-lg-2 col-md-6 col-sm-4 p-0">
                    <div class="js-featured-services-item  br-fourth">
                        <div class="js-featured-content">
                            <span class="js-featured-icon primary-color"><img src="{{asset('img/icons/Sport.svg')}}" alt="Icon"></span>
                            <p>Рассчитать и выбрать страховку для спортсменов, а также оформить <span>электронный полис</span></p>
                            <a href="{{route('soon')}}" class="btn-blue">Спорт</a>
                            <p class="price-from">От 90 ₽</p>
                        </div>
                    </div>
                </div><!-- col-md-4 -->
                {{--<div class="col-lg-2 col-md-6 col-sm-4 p-0">
                    <div class="js-featured-services-item">
                        <div class="js-featured-content">
                            <span class="js-featured-icon primary-color"><img src="{{asset('img/icons/Health.svg')}}" alt="Icon"></span>
                            <p>Получить предложение о медицинском страхование здоровья</p>
                            <a href="{{route('soon')}}" class="btn-blue padd_custom">Восстановление скидки</a>
                            <p class="price-from pt-18">От 700 ₽</p>
                        </div>
                    </div>
                </div><!-- col-md-4 -->--}}
                <div class="col-lg-2 col-md-6 col-sm-4 p-0">
                    <div class="js-featured-services-item br-last">
                        <div class="js-featured-content">
                            <span class="js-featured-icon primary-color"><img src="{{asset('img/icons/House.svg')}}" alt="Icon"></span>
                            <p>Страхование недвижимости или ипотки. Возможно оформить <span>электронный полис</span></p>
                            <a href="{{route('estate')}}" class="btn-blue">Имущество</a>
                            <p class="price-from">От 700 ₽</p>

                        </div>
                    </div>
                </div><!-- col-md-4 -->

            </div><!-- row -->
        </div><!-- container -->
    </div><!-- featured-services -->

    <div class="blog-post-area pb-70 partners">
        <div class="container osago">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-title text-center">
                        <h2 class="heading-title-partners">Партнёры</h2>
                        <h4 class="heading-subtitle">Сеть наших партнеров постоянно растет! Мы сотрудничаем
                            исключительно с теми компаниями, репутация которых подтверждена положительным опытом работы.</h4>
                    </div>
                </div><!-- col-lg-4 -->
            </div>
            <div class="blog-post-slide">
                <div class="blog-post-item mb-50">
                    <div class="blog-post-thumbnail">
                        <img src="{{asset('img/partners/01.png')}}" alt="thumbnail">
                    </div>
                </div><!-- blog-post-item -->
                <div class="blog-post-item mb-50">
                    <div class="blog-post-thumbnail">
                        <img src="{{asset('img/partners/02.png')}}" alt="thumbnail">
                    </div>
                </div><!-- blog-post-item -->
                <div class="blog-post-item mb-50">
                    <div class="blog-post-thumbnail">
                        <img src="{{asset('img/partners/03.png')}}" alt="thumbnail">
                    </div>
                </div><!-- blog-post-item -->
                <div class="blog-post-item mb-50">
                    <div class="blog-post-thumbnail">
                        <img src="{{asset('img/partners/04.png')}}" alt="thumbnail">
                    </div>
                </div><!-- blog-post-item -->
                <div class="blog-post-item mb-50">
                    <div class="blog-post-thumbnail">
                        <img src="{{asset('img/partners/05.png')}}" alt="thumbnail">
                    </div>
                </div><!-- blog-post-item -->
                <div class="blog-post-item mb-50">
                    <div class="blog-post-thumbnail">
                        <img src="{{asset('img/partners/06.png')}}" alt="thumbnail">
                    </div>
                </div><!-- blog-post-item -->
                <div class="blog-post-item mb-50">
                    <div class="blog-post-thumbnail">
                        <img src="{{asset('img/partners/07.png')}}" alt="thumbnail">
                    </div>
                </div><!-- blog-post-item -->
                <div class="blog-post-item mb-50">
                    <div class="blog-post-thumbnail">
                        <img src="{{asset('img/partners/08.png')}}" alt="thumbnail">
                    </div>
                </div><!-- blog-post-item -->
                <div class="blog-post-item mb-50">
                    <div class="blog-post-thumbnail">
                        <img src="{{asset('img/partners/09.png')}}" alt="thumbnail">
                    </div>
                </div><!-- blog-post-item -->
                <div class="blog-post-item mb-50">
                    <div class="blog-post-thumbnail">
                        <img src="{{asset('img/partners/10.png')}}" alt="thumbnail">
                    </div>
                </div><!-- blog-post-item -->
                <div class="blog-post-item mb-50">
                    <div class="blog-post-thumbnail">
                        <img src="{{asset('img/partners/11.png')}}" alt="thumbnail">
                    </div>
                </div><!-- blog-post-item -->
            </div><!-- blog-post-slide -->
        </div><!-- container -->
    </div><!-- blog-post-area -->

    <section class="service-style2 service-style4">
        <div class="container-fluid bg-defense">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-title has-color text-center">
                        <p class="heading-title heading-title2">Преимущества
                            электронного полиса</p>
                    </div><!-- section-title -->
                </div><!-- col-lg-8 -->
            </div><!-- row -->
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="js-service-content has-color ml-0 mr-0">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="js-services-item">
                                    <div class="media">
                                        <div class="js-services-icon">
                                            <img src="{{asset('img/advantages/IconAdventages-0.svg')}}" alt="Icon">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0"><a href="javascript:void(0);">ЛЕГКО</a></h5>
                                            <span>Купить электронный Полис очень просто - достаточно иметь действующие документы</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="js-services-item">
                                    <div class="media">
                                        <div class="js-services-icon">
                                            <img src="{{asset('img/advantages/IconAdventages-3.svg')}}" alt="Icon">

                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0"><a href="javascript:void(0);">БЫСТРО</a></h5>
                                            <span>Оформленный электронный страховой полис приходит на e-mail сразу после оплаты и сохранения</span>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- col-md-4 -->
                            <div class="col-lg-4 col-md-12">
                                <div class="js-services-item">
                                    <div class="media">
                                        <div class="js-services-icon">
                                            <img src="{{asset('img/advantages/IconAdventages-1.svg')}}" alt="Icon">

                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0"><a href="javascript:void(0);">БЕЗОПАСНО</a></h5>
                                            <span>Передача документов и оплата осуществляется в режиме HTTPS - данные передаются в зашифрованном виде</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="js-services-item">
                                    <div class="media">
                                        <div class="js-services-icon">
                                            <img src="{{asset('img/advantages/IconAdventages-4.svg')}}" alt="Icon">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0"><a href="javascript:void(0);">ЗАКОННО</a></h5>
                                            <span>Электронный Полис, который вы получите на e-mail  равен традиционному (бумажному) Полису</span>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- col-md-4 -->
                            <div class="col-lg-4 col-md-12">
                                <div class="js-services-item">
                                    <div class="media">
                                        <div class="js-services-icon">
                                            <img src="{{asset('img/advantages/IconAdventages-2.svg')}}" alt="Icon">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0"><a href="javascript:void(0);">ВЫГОДНО</a></h5>
                                            <span>Цена электронного Полиса на нашем сайте не отличается от цены на сайте страховой компании-партнера</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="js-services-item">
                                    <div class="media">
                                        <div class="js-services-icon">
                                            <img src="{{asset('img/advantages/IconAdventages-5.svg')}}" alt="Icon">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0"><a href="javascript:void(0);">УДОБНО</a></h5>
                                            <span>Электронный Полис оформляется онлайн без посещения офиса и длительных ожиданий в очередях</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- col-md-4 -->
                        </div><!-- row -->
                    </div><!-- js-service-content -->
                </div><!-- col-lg-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- service-style -->

    <section class="project-area project-style4 p-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 mx-auto text-center">
                    <div class="section-title">
                        <h1 class="w-100"><img src="{{asset('img/GerbRF.svg')}}" width="80" class="mx-auto"  alt=""></h1>
                        <h2 class="heading-title-partners pt-30 pb-30">Официальные источники</h2>
                        <p class="heading-subtitle">Комментарии официальных лиц и организаций подтверждающие
                            законность и перспективы оказания услуг по оформлению полисов в электронном формате</p>
                    </div>

                </div><!-- col-lg-5 -->

            </div><!-- row -->
            <div class="row official-resources">
                <div class="col-lg-4 offset-lg-2">
                    <p>
                        «Электронный полис имеет такую же юридическую силу, как и страховой полис, оформленный на бланке строгой отчетности в офисе страховщика.»
                    </p>
                    <p>Российский Союз Автостраховщиков</p>
                </div>
                <div class="col-lg-4">
                    <p>
                        «Центральный Банк России будет контролировать, соблюдение требований по бесперебойности продаж электронных полисов ОСАГО.»
                    </p>
                    <p>Центральный Банк России</p>
                </div>
            </div>

        </div><!-- container -->
    </section><!-- project-style 2 -->


    <section class="service-style2 service-style4 stages">
        <div class="container-fluid bg-stages">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-title has-color text-center">
                        <p class="heading-title heading-title2">Этапы оформления
                            электронного полиса</p>
                    </div><!-- section-title -->
                </div><!-- col-lg-8 -->
            </div><!-- row -->
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="js-service-content has-color ml-0 mr-0">
                        <div class="row">
                            <div class="col-lg-2 offset-lg-1 col-md-12 arrows">
                                <div class="js-services-item">
                                    <div class="media">
                                        <div class="media-body">
                                            <img src="{{asset('img/stages/IconStages-2.svg')}}" alt="Icon">
                                            <h5 class="mt-0 "><a href="javascript:void(0);" class="mx-auto">РАССЧИТАЙТЕ СТОИМОСТЬ</a></h5>
                                            <span>Воспользуйтесь калькулятором услуг, чтобы получить предварительную стоимость</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- col-lg-2 -->

                            <div class="col-lg-2 col-md-12 arrows">
                                <div class="js-services-item">
                                    <div class="media">
                                        <div class="media-body">
                                            <img src="{{asset('img/stages/IconStages-1.svg')}}" alt="Icon">
                                            <h5 class="mt-0 "><a href="javascript:void(0);" class="mx-auto">ВЫБЕРИТЕ ЛУЧШЕЕ</a></h5>
                                            <span>Выберите один из наиболее подходящих вам предложений</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- col-lg-2 -->

                            <div class="col-lg-2 col-md-12 arrows">
                                <div class="js-services-item">
                                    <div class="media">
                                        <div class="media-body">
                                            <img src="{{asset('img/stages/IconStages-0.svg')}}" alt="Icon">
                                            <h5 class="mt-0 "><a href="javascript:void(0);" class="mx-auto">ЗАПОЛНИТЕ ФОРМУ</a></h5>
                                            <span>Введите все данные необходимые для оформления страховки</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- col-lg-2 -->

                            <div class="col-lg-2 col-md-12 arrows">
                                <div class="js-services-item">
                                    <div class="media">
                                        <div class="media-body">
                                            <img src="{{asset('img/stages/IconStages-3.svg')}}" alt="Icon">
                                            <h5 class="mt-0 "><a href="javascript:void(0);" class="mx-auto">ОПЛАТИТЕ</a></h5>
                                            <span>Оплатите услуги удобным для вас способом</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- col-lg-2 -->

                            <div class="col-lg-2 col-md-12 no-arrow">
                                <div class="js-services-item">
                                    <div class="media">
                                        <div class="media-body">
                                            <img src="{{asset('img/stages/IconStages-4.svg')}}" alt="Icon">
                                            <h5 class="mt-0 "><a href="javascript:void(0);" class="mx-auto">ПОЛУЧИТЕ СТРАХОВКУ</a></h5>
                                            <span>Получите электронный полис на e-mail</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- col-lg-2 -->

                        </div><!-- row -->
                    </div><!-- js-service-content -->
                </div><!-- col-lg-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- service-style -->


    <div class="blog-post-area pb-70 pt-70 feedbacks">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-title text-center">
                        <h2 class="heading-title-partners">Отзывы клиентов</h2>
                        <h4 class="heading-subtitle">Мы ценим любую обратную связь о нашей работе, будем рады получить и ваш отзыв</h4>
                    </div>
                </div><!-- col-lg-4 -->
            </div>
            <div class="blog-post-slide" id="feedbacks">
                <div class="blog-post-item mb-50">
                    <div class="blog-post-thumbnail feedback-thumbnail">
                        <div class="card px-20">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-4 col-4">
                                        <img src="{{asset('img/feedbacks/avatars/Ellipse-0.png')}}" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8 col-8 my-auto">
                                        <h5 class="card-title mb-0">Дмитрий</h5>
                                        <p class="card-text">Путешественник</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <p class="card-text">
                                    Стоял в пробке, вспомнил, что надо сделать ОСАГО, неделю как... Зашел на сайт. Сделал все быстро пока ехал (стоял 😬 😅).
                                    Так же помогли с оформление диагностической карты, без которой как оказалось нельзя делать ОСАГО.
                                    Жду приложение для iOS!
                                </p>

                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-5 footer-text">Оценка</div>
                                    <div class="col-md-7">
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- feedback-item -->
                <div class="blog-post-item mb-50">
                    <div class="blog-post-thumbnail feedback-thumbnail">
                        <div class="card px-20">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-4 col-4">
                                        <img src="{{asset('img/feedbacks/avatars/Ellipse-5.png')}}" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8 col-8 my-auto">
                                        <h5 class="card-title mb-0">Никита</h5>
                                        <p class="card-text">Предприниматель</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <p class="card-text">
                                    Ребята всё оформляется очень быстро! Если не понятно, звонишь. В этот же день полис у тебя. Техосмотр у них тоже не проблема! 😉 Оперативная работа. Удобно. Быстро. По базе проверил полис в тот же день - все работает. Экономия времени! Рекомендую всем!
                                </p>

                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-5 footer-text">Оценка</div>
                                    <div class="col-md-7">
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- feedback-item -->
                <div class="blog-post-item mb-50">
                    <div class="blog-post-thumbnail feedback-thumbnail">
                        <div class="card px-20">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-4 col-4">
                                        <img src="{{asset('img/feedbacks/avatars/Ellipse-1.png')}}" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8 col-8 my-auto">
                                        <h5 class="card-title mb-0">Дмитрий</h5>
                                        <p class="card-text">Гос служащий</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <p class="card-text">
                                    Посоветовал товарищ не искать по каждой страховой, а обратиться сюда. Посмотрел ценники всех страховых. Решил страховаться. Написал менеджеру. Все документы просто сфоткал и отправил на почту! В тот же день получил электронный полис. Ребята работают чётко, рекомендую.
                                </p>

                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-5 footer-text">Оценка</div>
                                    <div class="col-md-7">
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- feedback-item -->
                <div class="blog-post-item mb-50">
                    <div class="blog-post-thumbnail feedback-thumbnail">
                        <div class="card px-20">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-4 col-4">
                                        <img src="{{asset('img/feedbacks/avatars/Ellipse-2.png')}}" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8 col-8 my-auto">
                                        <h5 class="card-title mb-0">Екатерина</h5>
                                        <p class="card-text">Студентка</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <p class="card-text">
                                    Обратилась в компанию в связи с отчаянными попытками найти полис ОСАГО по приемлемой цене. Сработали быстро и максимально удобно. Менеджер рассказал у какой страховой какие плюсы-минусы. В итоге я оформила все сама на сайте без проблем!
                                </p>

                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-5 footer-text">Оценка</div>
                                    <div class="col-md-7">
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- feedback-item -->
                <div class="blog-post-item mb-50">
                    <div class="blog-post-thumbnail feedback-thumbnail">
                        <div class="card px-20">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-4 col-4">
                                        <img src="{{asset('img/feedbacks/avatars/Ellipse-3.png')}}" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8 col-8 my-auto">
                                        <h5 class="card-title mb-0">Зарема</h5>
                                        <p class="card-text">Домохозяйка</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <p class="card-text">
                                    Только получила права - купили машину, стали искать где сделать КАСКО. Куда не звонили везде предлагали страховку от 120 тысяч из-за нулевого стажа!!!! Подруга посоветовала РСА. Сделали КАСКО чисто для банка за 70 тысяч! Спасибо! Сэкономили месячную зарплату!☺️💰
                                </p>

                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-5 footer-text">Оценка</div>
                                    <div class="col-md-7">
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                        <img src="{{asset('img/feedbacks/rates/star-1.svg')}}" class="img-w-15 " alt=""> &nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- feedback-item -->
            </div><!-- feedback-slide -->
        </div><!-- container -->
    </div><!-- feedback-area -->

    <section class="js-testimonial-area pt-0 pb-0 about-us">
        <div class="row ">
            <div class="col-lg-6 years-10 about-padd">
                <div class="js-testimonial-thumbnail">
                    <img src="{{asset('img/10.svg')}}" class="d-block mx-auto" alt="thumbnail">
                </div>
            </div><!-- col-lg-6 -->
            <div class="col-lg-6 about-padd">
                <h2 class="w-50">РОССИЙСКОЕ СТРАХОВОЕ АГЕНСТВО</h2>
                <p class="pt-65 w-75">
                    Компания основана в 2007 году и более чем за десять лет работы помогла тысячам клиентов выбрать и оформить наиболее выгодные предложения доступные на рынке страхования. Высокий уровень сервиса и оперативность предоставления страховых услуг - главная цель компании. Работая только с проверенными партнерами, РСА гарантирует своим клиентам надежность и прозрачность при оказании услуг.
                </p>

            </div><!-- col-lg-6 -->
        </div><!-- row -->
    </section>

    <div class="blog-post-area pb-70 pt-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-title text-center">
                        <h2 class="heading-title-partners">Лицензии и сертификаты</h2>
                        <h4 class="heading-subtitle">Сеть наших партнеров постоянно растет! Мы работаем исключительно с теми компаниями, репутация которых подтверждена положительным опытом наших клиентов.</h4>
                    </div>
                </div><!-- col-lg-4 -->
            </div>
            <div class="blog-post-slide" id="licenes">
                <div class="blog-post-item">
                    <div class="blog-post-thumbnail feedback-thumbnail">
                        <div class="card text-white">
                            <div class="card-header py-0">
                                <div class="row">
                                    <div class="col-md-9 col-8 my-auto">
                                        <p class="card-text">ООО СО "ВЕРНА"</p>
                                    </div>
                                    <div class="col-md-3 col-4">
                                        <img src="{{asset('img/license-medal.svg')}}" class="card-img" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Лицензия СЛ №3245 от 17.09.2015г. АД-ГПХ № 85/17
                                    От 28.03.2017г.
                                </p>
                            </div>
                        </div>

                    </div>
                </div><!-- feedback-item -->
                <div class="blog-post-item">
                    <div class="blog-post-thumbnail feedback-thumbnail">
                        <div class="card text-white">
                            <div class="card-header py-0">
                                <div class="row">
                                    <div class="col-md-9 col-8 my-auto">
                                        <p class="card-text">АО «НАСКО»</p>
                                    </div>
                                    <div class="col-md-3 col-4">
                                        <img src="{{asset('img/license-medal.svg')}}" class="card-img" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Лицензия ЦБРФ СЛ № 3116
                                    От 25.11.2016
                                </p>
                            </div>
                        </div>

                    </div>
                </div><!-- feedback-item -->
                <div class="blog-post-item">
                    <div class="blog-post-thumbnail feedback-thumbnail">
                        <div class="card text-white">
                            <div class="card-header py-0">
                                <div class="row">
                                    <div class="col-md-9 col-8 my-auto">
                                        <p class="card-text">ООО "ЮЖУРАЛ-АСКО"</p>
                                    </div>
                                    <div class="col-md-3 col-4">
                                        <img src="{{asset('img/license-medal.svg')}}" class="card-img" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Лицензия ЦБ РФ №2243 26.10.2016. Агентский договор №609 А/16 От 09.12.2016г.
                                </p>
                            </div>
                        </div>

                    </div>
                </div><!-- feedback-item -->
                <div class="blog-post-item">
                    <div class="blog-post-thumbnail feedback-thumbnail">
                        <div class="card text-white">
                            <div class="card-header py-0">
                                <div class="row">
                                    <div class="col-md-9 col-8 my-auto">
                                        <p class="card-text">ООО "Росгосстрах"</p>
                                    </div>
                                    <div class="col-md-3 col-4">
                                        <img src="{{asset('img/license-medal.svg')}}" class="card-img" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Лицензия СЛ №0977
                                    Агентский договор №14-К/2014
                                    От 01.01.2014г.
                                </p>
                            </div>
                        </div>

                    </div>
                </div><!-- feedback-item -->
                <div class="blog-post-item">
                    <div class="blog-post-thumbnail feedback-thumbnail">
                        <div class="card text-white">
                            <div class="card-header py-0">
                                <div class="row">
                                    <div class="col-md-9 col-8 my-auto">
                                        <p class="card-text">САО "ЭРГО"</p>
                                    </div>
                                    <div class="col-md-3 col-4">
                                        <img src="{{asset('img/license-medal.svg')}}" class="card-img" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Лицензия СЛ №0177, Агентский договор №3223-ю
                                    От 31.01.2013г.
                                </p>
                            </div>
                        </div>

                    </div>
                </div><!-- feedback-item -->
                <div class="blog-post-item">
                    <div class="blog-post-thumbnail feedback-thumbnail">
                        <div class="card text-white">
                            <div class="card-header py-0">
                                <div class="row">
                                    <div class="col-md-9 col-8 my-auto">
                                        <p class="card-text">СПАО "РЕСО-Гарантия"</p>
                                    </div>
                                    <div class="col-md-3 col-4">
                                        <img src="{{asset('img/license-medal.svg')}}" class="card-img" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Лицензия №1209
                                    Агентский договор №13070327
                                    От 23.01.2013г.
                                </p>
                            </div>
                        </div>

                    </div>
                </div><!-- feedback-item -->
                <div class="blog-post-item">
                    <div class="blog-post-thumbnail feedback-thumbnail">
                        <div class="card text-white">
                            <div class="card-header py-0">
                                <div class="row">
                                    <div class="col-md-9 col-8 my-auto">
                                        <p class="card-text">ГСК "ЮГОРИЯ"</p>
                                    </div>
                                    <div class="col-md-3 col-4">
                                        <img src="{{asset('img/license-medal.svg')}}" class="card-img" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Лицензия СЛ №3211
                                    АД-04№ 98-12/16-00
                                    От 19.01.2016г.
                                </p>
                            </div>
                        </div>

                    </div>
                </div><!-- feedback-item -->
            </div><!-- feedback-slide -->
        </div><!-- container-fluid -->
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 col-md-12 my-auto">
                    <div class="js-agent-item w-80 mx-auto">
                        <a href="{{asset('img/certificates/Certificate1.jpg')}}" data-lightbox="cert"><div class="js-agent-thumbnail">
                            <img src="{{asset('img/certificates/Certificate1.jpg')}}" alt="agent-thumbnail">
                        </div>
                        </a>
                    </div>
                </div><!-- col-lg-4 -->
                <div class="col-lg-4 col-md-12 ">
                    <div class="js-agent-item">
                        <a href="{{asset('img/certificates/Certificate2.jpg')}}" data-lightbox="cert"><div class="js-agent-thumbnail">
                            <img src="{{asset('img/certificates/Certificate2.jpg')}}" alt="agent-thumbnail">
                        </div>
                        </a>

                    </div>
                </div><!-- col-lg-4 -->
                <div class="col-lg-4 col-md-12 my-auto">
                    <div class="js-agent-item w-80 mx-auto">
                        <a href="{{asset('img/certificates/Certificate3.jpg')}}" data-lightbox="cert"><div class="js-agent-thumbnail">
                            <img src="{{asset('img/certificates/Certificate3.jpg')}}" alt="agent-thumbnail">
                        </div>
                        </a>
                    </div>
                </div><!-- col-lg-4 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- feedback-area -->
@endsection
