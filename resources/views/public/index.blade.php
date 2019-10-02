@extends('layouts.index')

@section('title', trans('pub.page.title'))

@section('content')

    @include('_partials/slider')
    <a name="osago-calc"></a>

    <section id="osagocalc" class="features-area">
        <div class="container">
            <div class="row text-center">
                <h2 class="title">
                    МОМЕНТАЛЬНЫЙ
                    <span class="title-head">Расчет ОСАГО</span>
                </h2>
            </div><!--/ Title row end -->
            @include('_partials/osago-calc')
        </div><!--/ Container end -->
    </section><!-- Osago end -->

    <section id="ts-features" class="features-area no-padding">
        <div class="container">
            <div class="row text-center">
                <h2 class="title">
                    Как быстро и просто
                    <span class="title-head">Оформить полис ОСАГО</span>
                </h2>
            </div><!--/ Title row end -->

            <div class="row">
                <div class="col-md-4">
                    <div class="ts-service-box">
						<span class="ts-service-icon">
							<i class="fa fa-shopping-cart"></i>
						</span>
                        <div class="ts-service-box-content">
                            <h3>Заказ</h3>
                            <ul>
                                <li>С помощью калькулятора</li>
                                <li>По телефону</li>
                                <li>Заказать обратный звонок</li>
                                <li>Потребуется 10 минут</li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- Col 1 end -->

                <div class="col-md-4">
                    <div class="ts-service-box">
						<span class="ts-service-icon">
							<i class="fa fa-file-text-o"></i>
						</span>
                        <div class="ts-service-box-content">
                            <h3>Оформление</h3>
                            <ul>
                                <li>Вы отправляете нам документы</li>
                                <li>Мы проверяем документы</li>
                                <li>Заполняем за вас заявление</li>
                                <li>Потребуется 20 минут</li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- Col 2 end -->

                <div class="col-md-4">
                    <div class="ts-service-box">
						<span class="ts-service-icon">
							<i class="fa fa-envelope-o"></i>
						</span>
                        <div class="ts-service-box-content">
                            <h3>Доставка</h3>
                            <ul>
                                <li>Распечатываем полис</li>
                                <li>Доставляем куда и когда удобно</li>
                                <li>Оплата при получении</li>
                                <li>Потребуется 2 часа</li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- Col 3 end -->

            </div><!-- Content row end -->
        </div><!--/ Container end -->
    </section><!-- About us end -->

    <section id="ts-documents" class="features-area" style="padding: 30px 0;">
        <div class="container">
                        <div class="row text-center">
                            <h2 class="title">
                                Оформление полиса
                                <span class="title-head">ОСАГО по 3 документам</span>
                            </h2>
                        </div><!--/ Title row end -->



            <div class="row">
                <div class="col-md-4">
                    <div class="ts-service-wrapper">
                        <div class="ts-service-image-wrapper">
				         <span class="ts-service-image">
				         	<img class="img-responsive" src="/images/docs/feature1.jpg" alt="">
				         </span>
                        </div>
                        <div class="ts-service-info">
                            <h3>Паспорт</h3>
                        </div>
                    </div>
                </div><!-- Col 1 end -->

                <div class="col-md-4">
                    <div class="ts-service-wrapper">
                        <div class="ts-service-image-wrapper">
				         <span class="ts-service-image">
				         	<img class="img-responsive" src="/images/docs/feature2.jpg" alt="">
				         </span>
                        </div>
                        <div class="ts-service-info">
                            <h3>Свидетельство о регистрации ТС</h3>
                        </div>
                    </div>
                </div><!-- Col 2 end -->

                <div class="col-md-4">
                    <div class="ts-service-wrapper">
                        <div class="ts-service-image-wrapper">
				         <span class="ts-service-image">
				         	<img class="img-responsive" src="/images/docs/feature3.jpg" alt="">
				         </span>
                        </div>
                        <div class="ts-service-info">
                            <h3>Водительское удостоверение</h3>
                        </div>
                    </div>
                </div><!-- Col 3 end -->

            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </section><!-- Documents end -->

    <section class="call-action-all no-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="action-text">
                        <h2>@lang('pub.send.documents')</h2>
                    </div>
                </div>
                <div class="col-sm-6 pull-right">
                    <div class="action-btn">
                        <h2>@lang('pub.phone.number')</h2>
                    </div>
                    <div class="action-icon">
                        <i class="fa fa-whatsapp" title="Whatsapp"></i>
                        <i class="fa fa-volume-control-phone" title="Viber"></i>
                        <i class="fa fa-telegram" title="Telegram"></i>
                    </div>
                </div>
            </div>
        </div><!--/ Container end -->
    </section><!-- Call to Action end -->

    <section id="partners-area" class="partners-area">
        <div class="container">
            <div class="row text-center">
                <h3 class="title">
                    Ведущие страховые компании
                    <span class="title-head">Нам доверяют</span>
                </h3>
            </div> <!-- Title row end -->

            <div class="row">
                <div id="partners-carousel" class="col-sm-12 owl-carousel owl-theme text-center partners">
                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-responsive" src="images/partners/partner1.jpg" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-responsive" src="images/partners/partner2.jpg" alt="client">
                        </a>
                    </figure>

                    <!--figure class="item partner-logo">
                        <a href="#">
                            <img class="img-responsive" src="images/partners/partner3.jpg" alt="client">
                        </a>
                    </figure-->

                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-responsive" src="images/partners/partner4.jpg" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-responsive" src="images/partners/partner5.jpg" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-responsive" src="images/partners/partner6.jpg" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-responsive" src="images/partners/partner7.jpg" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-responsive" src="images/partners/partner8.jpg" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-responsive" src="images/partners/partner9.jpg" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo last">
                        <a href="#">
                            <img class="img-responsive" src="images/partners/partner10.jpg" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo last">
                        <a href="#">
                            <img class="img-responsive" src="images/partners/partner11.gif" alt="client">
                        </a>
                    </figure>

                </div><!--/ Owl carousel end -->

            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </section><!--/ Partners end -->

    <section id="license-area" class="licenses-area no-padding">
        <div class="container">
            <div class="row text-center">
                <h3 class="title">
                    <span class="title-head">Лицензии</span>
                </h3>
            </div> <!-- Title row end -->

            <div class="row">
                <ul>
                    <li>ООО СО "ВЕРНА" Лицензия СЛ №3245 от 17.09.2015г. АД-ГПХ № 85/17 от 28.03.2017г.</li>
                    <li>ООО "Росгосстрах" Лицензия СЛ №0977 Агентский договор №14-К/2014 от 01.01.2014г.</li>
                    <li>ООО "Группа Ренессанс Страхование" Лицензия №1284 Агентский договор №G16190 от 22.01.2013г.</li>
                    <li>САО "ЭРГО" Лицензия СЛ №0177, Агентский договор №3223-ю от 31.01.2013г.</li>
                    <li>СПАО "РЕСО-Гарантия" ЛИЦЕНЗИЯ №1209 Агентский договор №13070327 от 23.01.2013г.</li>
                    <li>ООО "ПРОМИНСТРАХ" Лицензия СЛ №3438 Агентский договор 11/2016-23-ОСАГО</li>
                    <li>ГСК "ЮГОРИЯ" Лицензия СЛ №3211 АД-04№ 98-12/16-00 от 19.01.2016г.</li>
                    <li>ООО "ЮЖУРАЛ-АСКО" Лицензия ЦБ РФ №2243 26.10.2016. Агентский договор №609 А/16 От 09.12.2016г.</li>

                </ul>
            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </section><!--/ Licenses end -->

    <section id="check-area" class="checks-area no-padding">
        <div class="container">
            <div class="row text-center">
                <h3 class="title">
                    <span class="title-head">Проверка полисов</span>
                </h3>
            </div> <!-- Title row end -->

            <div class="row">
                <ul>
                    <li><a class="strong" href="http://dkbm-web.autoins.ru/dkbm-web-1.0/bsostate.htm" target="_blank" rel="nofollow">Сведения для страхователей о статусе бланков полисов ОСАГО и дате заключения договора</a></li>
                    <li><a class="strong" href="http://dkbm-web.autoins.ru/dkbm-web-1.0/osagovehicle.htm" target="_blank" rel="nofollow">Сведения для страхователей о застрахованных транспортных средствах</a></li>
                    <li><a class="strong" href="http://dkbm-web.autoins.ru/dkbm-web-1.0/policy.htm" target="_blank" rel="nofollow">Сведения для потерпевших и других участников ДТП о наличии действующего договора ОСАГО в отношении определенного лица или транспортного средства</a></li>
                </ul>
            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </section><!--/ Licenses end -->

    <section id="ts-content" class="ts-content no-padding">
        <div class="container-fluid">
            <div class="row">
            <div id="team-slide" class="col-sm-12 owl-carousel owl-theme">
                <div class="item">
                    <div class="col-md-6 left">
                        <h2>Гарантии</h2>
                        <p>
                            Являясь руководителем страхового портала, я лично слежу за выполнением всех
                            обязательств взятых нашей компанией.<br/>
                        </p>

                        <div class="row">
                            <div class="col-md-6 service-box"><i class="fa fa-pie-chart">&nbsp;</i>
                                <div class="service-box-content">
                                    <h3>Оригинальные полисы</h3>
                                    <p>
                                        Все полисы оформленные у нас являются оригинальными! Вы всегда можете проверить полис
                                        на сайте РСА или в СК.
                                    </p>
                                </div>
                            </div><!--/ Box 1 end -->

                            <div class="col-md-6 service-box"><i class="fa fa-line-chart">&nbsp;</i>
                                <div class="service-box-content">
                                    <h3>Правильный расчет</h3>
                                    <p>
                                        Вы получите правильный расчет полиса ОСАГО. Мы всегда используем актуальную информацию
                                        по скидкам (КБМ) и тарифам.
                                    </p>
                                </div>
                            </div><!--/ Box 2 end -->
                        </div><!-- 1st row end -->

                        <div class="row">
                            <div class="col-md-6 service-box"><i class="fa fa-exchange">&nbsp;</i>
                                <div class="service-box-content">
                                    <h3>Сдача в срок</h3>
                                    <p>
                                        Все оформленные у нас полисы, всегда, сдаются в страховую компанию в установленные
                                        агентским договором сроки.
                                    </p>
                                </div>
                            </div><!--/ Box 3 end -->

                            <div class="col-md-6 service-box"><i class="fa fa-graduation-cap">&nbsp;</i>
                                <div class="service-box-content">
                                    <h3>Не забудете продлить</h3>
                                    <p>
                                        Вы обязательно получите уведомление об окончании вашего договора страхования, продление
                                        не займет много времени!
                                    </p>
                                </div>
                            </div><!--/ Box 4 end -->
                        </div>
                        <h4>Генеральный директор,<br/>Телешев Максим Михайлович</h4>
                    </div><!-- Content left -->

                    <div class="col-md-6 right" data-background-url="/images/content-bg1.jpg" style="height:600px;background:50% 50% / cover no-repeat;">
                    </div><!-- Content right -->

                </div><!--/ Content row end -->
                <div class="item">
                    <div class="col-md-6 left">
                        <h2>Надежность</h2>
                        <p>
                            В своей работе мы придерживаемся трёх основных принципов.<br/>
                        </p>

                        <div class="row">
                            <div class="col-xs-12 service-box"><i class="fa fa-user">&nbsp;</i>
                                <div class="service-box-content">
                                    <h3>Честность и порядочность по отношению к клиентам</h3>
                                </div>
                            </div><!--/ Box 1 end -->

                            <div class="col-xs-12 service-box"><i class="fa fa-shield">&nbsp;</i>
                                <div class="service-box-content">
                                    <h3>Надёжность</h3>
                                </div>
                            </div><!--/ Box 1 end -->

                            <div class="col-xs-12 service-box"><i class="fa fa-star">&nbsp;</i>
                                <div class="service-box-content">
                                    <h3>Постоянный контроль качества работы наших сотрудников</h3>
                                </div>
                            </div><!--/ Box 1 end -->
                        </div><!-- 1st row end -->

                        <div class="row">
                            <div class="col-xs-12 service-box"><i class="fa fa-briefcase">&nbsp;</i>
                                <div class="service-box-content">
                                    <h3>Мы гордимся тем, что:</h3>
                                    <ul>
                                    <li>
                                        Наши представители есть более чем в 15 городах по краю, каждый из которых является профессионалом своего дела!
                                    </li>
                                    <li>
                                        Мы заслужили доверие ведущих страховых компаний, которые являются нашими партнёрами уже много лет!
                                    </li>
                                    </ul>
                                </div>
                            </div><!--/ Box 3 end -->
                        </div>
                        <h4>Коммерческий директор,<br/>Хамуляк Павел Петрович</h4>
                    </div><!-- Content left -->

                    <div class="col-md-6 right" data-background-url="/images/content-bg2.jpg" style="height:600px;background:50% 50% / cover no-repeat;">
                    </div><!-- Content right -->

                </div><!--/ Content row end -->
            </div>
            </div>
        </div><!--/ Container end -->
    </section><!-- Content end -->

    <section id="testimonial" class="testimonial">
        <div class="container">
            <div class="row text-center">
                <h3 class="title">
                    Вот что говорят
                    <span class="title-head">Наши клиенты</span>
                </h3>
            </div><!--/ Title row end -->

            <div class="row">
                <div id="testimonial-slide" class="owl-carousel owl-theme testimonial-slide">
                    <div class="item">
                        <div class="testimonial-quote-item">
                            <img class="testimonial-thumb" src="images/testimonial/testimonial1.png" alt="testimonial">
                            <span class="quote-text">Обратилась в компанию в связи с отчаянными попытками найти полис ОСАГО и КАСКО по приемлемой цене. Сработали быстро и максимально удобно. Менеджер рассказал у какой страховой какие плюсы-минусы. Рекомендую!</span>
                            <span class="quotes-author">Екатерина Водяницкая,</span>
                            <span class="quotes-subtext">16.01.2017</span>
                        </div>
                    </div><!--/ Item 1 end -->

                    <div class="item">
                        <div class="testimonial-quote-item">
                            <img class="testimonial-thumb" src="images/testimonial/testimonial2.png" alt="testimonial">
                            <span class="quote-text">Ребята всё быстро делают! Звонишь и в этот же день полис у тебя. Техосмотр у них тоже не проблема! Оперативная работа. Удобно. Быстро. По базе проверял, полис настоящий. Экономия времени! Рекомендую всем!</span>
                            <span class="quotes-author">Никита Богачев,</span>
                            <span class="quotes-subtext">13.12.2016</span>

                        </div>
                    </div><!--/ Item 2 end -->

                    <div class="item">
                        <div class="testimonial-quote-item">
                            <img class="testimonial-thumb" src="images/testimonial/testimonial3.png" alt="testimonial">
                            <span class="quote-text">Очень доволен качеством услуг, приобретал автомобиль в кредит, в салоне насчитали очень дорогие тарифы по КАСКО по 4-5 компаниям, решил сравнить и обратился к этим ребятам, получил информацию по тарифам от 10 компаний, при этом рассказали где какие плюсы и минусы, в итоге застраховался в надежной компании на 32 тысячи дешевле того что предлагали в салоне. В будущем планирую по всем видам страхования обращаться именно сюда. Очень удобно что есть бесплатная доставка, ездить никуда не пришлось, сэкономил кучу времени и денег.</span>
                            <span class="quotes-author">Белов Алексей,</span>
                            <span class="quotes-subtext">10.12.2016</span>

                        </div>
                    </div><!--/ Item 3 end -->

                    <div class="item">
                        <div class="testimonial-quote-item">
                            <img class="testimonial-thumb" src="images/testimonial/testimonial4.png" alt="testimonial">
                            <span class="quote-text">Только сдала на права, купили машину в кредит в салоне-стали искать где сделать КАСКО - куда не звонили-везде предлагали страховку от 120 тысяч из-за нулевого стажа, а это пятая часть от стоимости машины!!!! Подруга посоветовала этого брокера -позвонила-позитивный менеджер Павел нашёл где сделать КАСКО чисто для банка за 70 тысяч! Спасибо, Павел! Сэкономили месячную зарплату!</span>
                            <span class="quotes-author">Зарема Данилова,</span>
                            <span class="quotes-subtext">11.11.2016</span>

                        </div>
                    </div><!--/ Item 4 end -->

                    <div class="item">
                        <div class="testimonial-quote-item">
                            <img class="testimonial-thumb" src="images/testimonial/testimonial5.png" alt="testimonial">
                            <span class="quote-text">Посоветовал товарищ не искать по каждой страховой, а обратиться сюда. Озвучили ценники всех страховых, рассказали подробно про акции и нюансы по тем или иным видам КАСКО. Решил страховаться у них. Никуда не ездил, в выходной прямо у дома провели осмотр машины, а за 10 минут до этого привезли и полис, это при том что все документы просто сфоткал и отправил на почту! Менял стекло без справок и было одно мелкое ДТП по моей вине, по всем вопросам звонил-всё урегулировали удалённо, только одну справку из ГИБДД взял-первую при ДТП. Ребята работают чётко, рекомендую.</span>
                            <span class="quotes-author">Дмитрий Благодаров,</span>
                            <span class="quotes-subtext">10.02.2017</span>

                        </div>
                    </div><!--/ Item 5 end -->

                    <div class="item">
                        <div class="testimonial-quote-item">
                            <img class="testimonial-thumb" src="images/testimonial/testimonial6.png" alt="testimonial">
                            <span class="quote-text">Стоял в пробке на Ленина, увидел красную бегущую строку и надпись все виды страхования = вспомни, что надо сделать осагу... припарковался и зашел туда. сделали все быстро и без проблем. так же помогли с оформление диагностической карты, без которой как оказалось нельзя делать осаго.</span>
                            <span class="quotes-author">Дмитрий Бондренко,</span>
                            <span class="quotes-subtext">10.12.2016</span>

                        </div>
                    </div><!--/ Item 6 end -->

                </div><!--/ Testimonial carousel end-->

            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </section><!--/ Testimonial end -->
@endsection
