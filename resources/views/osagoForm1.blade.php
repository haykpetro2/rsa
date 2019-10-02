@extends('layouts.header-footer')
@section('content')
    <div id="hero-slider-style6" class="d-flex align-items-center osago osago_calculate osago_forming">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="hero-one-content">
                        <p class="text-white bordered pl-4 mb-30 w-50">ОСАГО</p>
                        <p class="text-white pl-4 pb-200 w-60 media-font">Сделать рассчет по 11 компаниям и приобрести страховку вы можете самостоятельно или при помощи нашего специалиста</p>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- hero-slider     -->

    <div class="js-featured-services pb-35 osago osago_calculate osago_forming">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <div class="row">
                        <div class="col-sm-12 col-md-4  col-lg-4 col-xl-4">
                            <div class="card shadowed">
                                <div class="card-header">
                                    <img src="{{asset('img/icons/PC.png')}}" class="d-block mx-auto" alt="">
                                    <h5 class="text-center">Самостоятельно
                                        рассчитать и оформить</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Если у вас есть при себе все действующие документы (в том числе
                                        действительная диагностическая карта), тогда оформить страховку самостоятельно
                                        будет очень просто и максимально быстро.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('formYourself')}}" class="btn d-block w-100 light-blue">Оформить
                                        самостоятельно</a>
{{--                                    {{route('formYourself')}}--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4  col-lg-4 col-xl-4">
                            <div class="card shadowed">
                                <div class="card-header">
                                    <img src="{{asset('img/icons/Phone.png')}}" class="d-block mx-auto" alt="">
                                    <h5 class="text-center">Оформить по телефону</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Удобно в том случае, если диагностическая карта не действительна. Менеджер поможет оформить диагностическую карту, а также проверит вашу скидку КБМ и рассчитает стоимость и оформит вам полис. Платная услуга +500₽.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="javascript:void(0);" class="btn d-block w-100 light-blue"
                                       data-toggle="modal" data-target="#form_with_manager">Оформить с менеджером</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card shadowed">
                                <div class="card-header">
                                    <img src="{{asset('img/icons/Dwnld.png')}}" class="d-block mx-auto" alt="">
                                    <h5 class="text-center">Загрузить документы</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Менеджер проверит документы и вашу скидку КБМ. Удобно в том случае, если диагностическая карта не действительна. Менеджер поможет оформить диагностическую карту и страховку. Платная услуга +500₽.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('formUpload')}}" class="btn d-block w-100 light-blue">Отправить
                                        документы</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div><!-- row -->
        </div><!-- container-fluid -->
    </div><!-- featured-services -->

    {{--<div class="preview pb-40 osago osago_calculate osago_forming">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-8 col-xl-7 mx-auto">
                    <div class="row featured-services-row preview">
                        <div class="col-lg-12 p-40-30">
                            <div class="row justify-content-center mb-4">
                                <div class="col-lg-3">
                                    <h3 class="mb-10">Ваши данные:</h3>
                                    <h3>ID XXX XXX</h3>
                                </div>
                                <div class="col-lg-3">
                                    <p>Страховая компания:</p>
                                    <h3>АльфаСтрахование</h3>
                                </div>
                                <div class="col-lg-3">
                                    <p>Тип полиса:</p>
                                    <h3>Бумажный</h3>
                                </div>
                                <div class="col-lg-3">
                                    <p>Предварительная сумма:</p>
                                    <h3>4350 ₽</h3>
                                </div>

                            </div>
                            <div class="row">
                                <h3 class="text-right w-100 mx-5"><a href="{{route('osago')}}" class="change">Изменить...</a>
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- row -->
        </div><!-- container-fluid -->
    </div>--}}
    <div class="container-fluid questions pb-120 osago osago_calculate osago_forming">
        <div class="row">
            <div class="section-title text-center w-100">
                <h2 class="heading-title-partners mx-auto w-45">Для оформления бумажного полиса ОСАГО вам
                    потребуется:</h2>
            </div>
            <div class="col-lg-6 col-xl-4 mx-auto">
                <p class="w-95">• Паспорт собственника авто и страхователя (если это разные люди)</p>
                <p class="w-95">• ПТС или свидетельство о регистрации автомобиля если он уже оформлен на вас</p>
                <p class="w-95">• Водительские удостоверения всех лиц, которые допущены к управлению</p>

            </div>
        </div>
    </div>
{{--    @if (session()->has('success'))
        <h1>{{ session('success') }}</h1>
    @endif--}}

    <!-- Modal 1-->
    <div class="modal fade" id="form_with_manager" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
                        <form action="{{action('OrdersController@postOsago3')}}" method="post" class="simple_form" id="byPhone">
{{--                        {!! Form::model($order, ['url' => action('OrdersController@postOsago2'), 'class' => 'simple_form']) !!}--}}
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control phone_number" name="phone" required placeholder="+7 (000) 0000000">
                            </div>
                            <button type="submit" class="btn d-block w-100 light-blue submit">Отправить</button>
                            <div class="form-group form-check mt-4">
                                <label class="check w-88"><span>Согласен на обработку персональных данных в соответствии с <a
                                   href="{{route('policy')}}" target="_blank" class="terms">Политикой конфиденциальности сайта</a></span>
                                    <input type="checkbox" checked name="name" class="agree">
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

    <!--Modal thank you-->
    <div class="modal fade" id="thank_you" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content w-65 mx-auto py-4">
                <div class="modal-header">
                    <div class="container-fluid">
                        <img src="{{asset('img/icons/IconSuccess.png')}}" class="d-block w-auto mx-auto" alt="">
                        <h5 class="modal-title d-block w-100 text-center pt-4" id="exampleModalCenterTitle1">
                            Спасибо!</h5>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <h4 class="mx-auto text-center">В ближайшее время с вами свяжется менеджер</h4>
                        <p class="mx-auto text-center">Работаем Пн-Сб
                            с 09:00 до 19:00 по Мск.</p>
                        <a href="javascript:void(0);" class="btn d-block w-100 light-blue"
                           data-dismiss="modal">Закрыть</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

    <script>
                @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                Swal({
                    title: 'Большое спасибо,',
                    text: 'Все отправлено, с вами свяжется в ближайшее время наш менеджер',
                    type: 'success',
                    timer:3000,
                    showConfirmButton:false
                });
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
    </script>
@stop
