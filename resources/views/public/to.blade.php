@extends('layouts.index')

@section('title', trans('pub.page.to.title'))

@section('content')

    @include('_partials/slider')

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                    <h2 class="page-title">Техосмотр в Краснодаре</h2>
                    <p>Наша Компания рада предложить услугу оформления диагностической карты техосмотра для транспортных средств всех категорий. Оформляя ТО у нас вы избавляете себя от изнурительных очередей, экономите ваше время и деньги!</p>

                    <p>Все что нужно Вам сделать, это самому заполнить необходимую форму или переслать фото тех паспорта с двух сторон!</p>

                    <div class="row call-action-all">
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

                    <h3>Почему без посещения пункта то?</h3>
                    <p>Просто потому, что мы предлагаем услуги передвижного пункта технического осмотра в г.Краснодар. Не надо ехать за техосмотром – техосмотр приедет к Вам сам! В любое удобное для Вас время и место!</p>

                    <h3>По результатам прохождения техосмотра в Краснодаре</h3>
                    <p>вы получите Диагностическую карту от аккредитованного оператора технического осмотра. Всем диагностическим картам, оформленным у нас, присваивается 15-значный регистрационный номер, который моментально попадает в единую базу ЕАИСТО ГИБДД. Мы ответственно относимся к каждому клиенту! <br/><strong>Сэкономьте свое время и деньги</strong>.</p>

                    <div class="gap-40">&nbsp;</div>


                    <div class="insurance-items">
                        <div class="row">
                            <div class="col-sm-8 insurance-item-content">
                                <ul class="list-round-arrow">
                                    <li>Доставка карты: самовывозом; на email или курьером по адресу.</li>
                                    <li>Аккредитованный оператор ТО. Быстро! Официально!</li>
                                    <li>Самовывоз из центрального офиса!</li>
                                    <li>Заполнить заявку Вы можете в любое удобное для Вас время 24 часа в сутки, наши операторы свяжутся с вами в тот же день в течение 15 минут, или на следующий день, если Вы оставили заявку в нерабочее время, например ночью.</li>
                                    <li>Способ доставки диагностической карты Вы можете выбрать самостоятельно при заполнении заявки или сообщить по телефону оператору.</li>
                                </ul>
                            </div>
                            <div class="col-sm-4 insurance-item-img">
                                <img class="img-responsive" src="images/insurance/details1.jpg" alt="">
                            </div>
                        </div><!--/ insurance items row end -->
                    </div><!-- Insruance item end -->
                    <a name="order"></a>
                    <br/>
                    <br/>

                    <h3 class="contact-form-title">Онлайн-заявка на ТО</h3>

                    <form action="{{action('OrdersController@postTo')}}" id="frm-to" method="post" role="form">
                        {{csrf_field()}}
                        <div class="error-container"></div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group required">
                                    <label for="name" class="control-label">@lang('order.Name')</label>
                                    <input class="form-control" name="name" id="name" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group required">
                                    <label for="phone" class="control-label">@lang('order.Phone')</label>
                                    <input class="form-control" name="phone" id="phone" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email" class="control-label">@lang('order.Email')</label>
                                    <input class="form-control" name="email" id="email" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="comment" class="control-label">@lang('order.Comment')</label>
                            <textarea class="form-control" name="comment" id="comment" rows="5"></textarea>
                        </div>
                        <p>@lang('order.Personal Data')</p>
                        <div class="text-right"><br>
                            <button class="btn btn-primary btn-lg solid blank btn-submit" type="button">@lang('order.Send')</button>
                        </div>
                        <input type="hidden" name="fields" id="dynamic-fields" value=""/>
                    </form>


                </div><!-- Content Col end -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-right">
                        <div class="widget box solid">
                            <h3 class="widget-title">Способ доставки ДК</h3>
                            <ul class="unstyled">
                                <li><strong>1. Самовывоз - бесплатно.</strong> Самостоятельно забрать подготовленную диагностическую карту техосмотра можно по адресу: ул.Ленина, 90, ПН-СБ с 10-00 до 19-00.</li>
                                <li><strong>2. Отправка на e-mail - бесплатно.</strong> Данный вариант можно выбрать при оформлении электронного полиса ОСАГО, что очень удобно и экономит ваше время. В дальнейшем при необходимости Вы всегда сможете забрать карту с живой подписью и печатью.</li>
                                <li><strong>3. Курьерская доставка – 200-300 рублей</strong>, только в пределах г.Краснодара.</li>
                            </ul>
                        </div><!-- Widget end -->

                    </div><!-- Sidebar end -->
                </div><!-- Sidebar Col end -->

            </div><!-- Main row end -->

        </div><!-- Conatiner end -->
    </section><!-- Main container end -->
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.btn-submit').on('click', function(){
                $('#dynamic-fields').val(JSON.stringify($('.dynamic-fields').find('.form-control').serializeArray()));
                $('<input type="submit">').hide().appendTo($('#frm-to')).click();
            });

            $(".box-slide").data('owlCarousel').jumpTo(2);
        });
    </script>
@endsection