@extends('layouts.header-footer')
@section('content')
    <style>
        /*input[type="button"] {
            -webkit-appearance: button;
            cursor: pointer;
        }*/
        #list .dropdown-item >span{
            width: 80%;
            display: inline-block;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }
        .input-group {
            clear: both;
            margin: 15px 0;
            position: relative;
            width: 20%;
            display: inline-block;
        }

        .input-group input[type='button'] {
            background-color: #eeeeee;
            min-width: 38px;
            width: auto;
            transition: all 300ms ease;
        }

        .input-group .button-minus,
        .input-group .button-plus {
            font-weight: bold;
            height: 38px;
            padding: 0;
            width: 38px;
            position: relative;
        }

        .input-group .quantity-field {
            position: relative;
            height: 38px;
            left: -6px;
            text-align: center;
            width: 62px;
            display: inline-block;
            font-size: 13px;
            margin: 0 0 5px;
            resize: vertical;
        }

        .button-plus {
            left: -13px;
        }

        input[type="number"] {
            -moz-appearance: textfield;
            -webkit-appearance: none;
        }
        iframe#sravniMantravelCalculator{
            width: 100% !important;
        }
        #jsMainView .calculator-vzr__container .calculator-vzr__inner,#jsMainView .calculator-vzr__container form{
            width: calc(100%) !important;
        }
        @media screen and (max-width: 1140px){
            .calculator-vzr__container .calculator-vzr__inner {
                width: 100% !important;
            }
        }

    </style>
    <div id="hero-slider-style6" class="d-flex align-items-center osago travel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="hero-one-content">
                        <p class="text-white bordered pl-4 mb-30 w-50">Путешествия</p>
                        <p class="text-white pl-4 pb-200">Чтобы рассчитать стоимость услуги
                            выберите необходимые параметры</p>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- hero-slider -->

    <div class="js-featured-services pb-100 osago travel">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-7 mx-auto">
                    <div class="row featured-services-row">
                        <div class="col-lg-12 p-60-30">
{{--                            col-lg-12 a exel--}}
                            {{--<form autocomplete="off" id="travel">
                                {{csrf_field()}}
                                <div class="row form-group mb-50">
                                    <div class="col-lg-3">
                                        <label>Страна отдыха</label>
                                        <div class="input-group d-block w-100">
                                            <input type="text" class="input-custom pl-15 text-left w-100"
                                                   placeholder="Европа" name="country" required>
                                        </div>

                                    </div>
                                    <div class="col-lg-3">
                                        <label>Количество человек</label>
                                        <div class="input-group d-block w-100">
                                            <input type="text" class="input-custom pl-15 text-left w-100"
                                                   placeholder="3" name="person_count" required>
                                        </div>

                                    </div>

                                    <div class="col-lg-3">
                                        <label>Период страхования</label>
                                        <div class="input-group d-block w-100">
                                        <input type="text" name="dates" autocomplete="off" required="required"
                                               class="input-custom w-100 pl-13"
                                               placeholder="С 1 по 15 июля 2019 г.">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Телефон</label>
                                        <div class="input-group d-block w-100">
                                            <input type="text" class="input-custom pl-15 text-left w-100 phone_number"
                                                   placeholder="+7 (000) 0000000" name="phone" required>
                                        </div>

                                    </div>


                                </div>

                                <div class="row form-group">
                                    <div class="col-lg-5 mx-auto">
                                        <button type="submit" class="btn bg-blue text-white btn-lg w-100 calc_travel submit">
                                            Рассчитать
                                        </button>
                                    </div>
                                </div>
                                <div class="row form-group form-check mt-4 p-4 mob-padd">
                                    <div class="col-lg-5 mx-auto">
                                        <label class="check"><span>Согласен на обработку персональных данных в соответствии с <a href="http://localhost:8000/policy" target="_blank" class="terms">Политикой конфиденциальности сайта</a></span>
                                            <input type="checkbox" checked="" name="is_name" class="casco_agree">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </form>--}}
                            <sravni-widget type='mantravel'  partner='rsa-strahovanie-r-f' inIframe='false' hide-partners='true'></sravni-widget>
                        </div>

                    </div>
                </div>

            </div><!-- row -->
        </div><!-- container-fluid -->
    </div><!-- featured-services -->

    {{--<div class="container osago mob-pt">
        <div class="row">
            <div class="section-title text-center w-100">
                <h2 class="heading-title-partners mx-auto w-45">Почему лучше оформлять
                    электронный полис?</h2>

                <div class="col-lg-9 mx-auto">
                    <div id="content" class="mt-100">
                        <div class="timeline">
                            <div class="timeline-container mb-50 right">
                                <div class="content">
                                    <h4 class="mb-10 font-weight-normal">ЭТО ЛЕГКО</h4>
                                    <p class="text-left">Купить электронный Полис очень просто - достаточно иметь
                                        действующие документы</p>
                                </div>
                            </div><!-- timeline-container -->
                            <div class="timeline-container mb-50 right">
                                <div class="content">
                                    <h4 class="mb-10 font-weight-normal">ЭТО УДОБНО</h4>
                                    <p class="text-left">Электронный Полис онлайн будет оформлен без посещения офиса и
                                        длительных ожиданий в очередях</p>
                                </div>
                            </div><!-- timeline-container -->
                            <div class="timeline-container mb-50 right">
                                <div class="content">
                                    <h4 class="mb-10 font-weight-normal">ЭТО БЕЗОПАСНО</h4>
                                    <p class="text-left">Оплата страховки через интернет осуществляется в защищенном
                                        режиме HTTPS</p>
                                </div>
                            </div><!-- timeline-container -->
                            <div class="timeline-container mb-50 right">
                                <div class="content">
                                    <h4 class="mb-10 font-weight-normal">ЭТО БЫСТРО</h4>
                                    <p class="text-left">Оформленный страховой полис приходит на e-mail сразу после
                                        оплаты и сохранения</p>
                                </div>
                            </div><!-- timeline-container -->
                            <div class="timeline-container mb-50 right">
                                <div class="content">
                                    <h4 class="mb-10 font-weight-normal">ЭТО ЗАКОННО</h4>
                                    <p class="text-left">Присылаемый на e-mail Полис равен традиционному (бумажному)
                                        Полису</p>
                                </div>
                            </div><!-- timeline-container -->
                            <div class="timeline-container mb-50 right">
                                <div class="content">
                                    <h4 class="mb-10 font-weight-normal">ЭТО ВЫГОДНО</h4>
                                    <p class="text-left">Цена электронного Полиса на нашем сайте не отличается от цены
                                        на сайте страховой компании-партнера</p>
                                </div>
                            </div><!-- timeline-container -->
                        </div> <!-- timeline -->
                    </div><!-- content -->
                </div>

            </div>
        </div>
    </div>--}}
    <div class="container-fluid questions pb-120 osago osago_calculate osago_forming">
        <div class="row">
            <div class="section-title text-center w-100">
                <h2 class="heading-title-partners mx-auto w-45">Нужна дополнительная консультация или помощь менеджера?</h2>
                <p>Оставьте свой телефон и наш специалист вам перезвонит </p>
            </div>
            <div class="col-lg-8 col-xl-8 mx-auto">
                <form id="askManager">
                    {{csrf_field()}}
                    <div class="row form-group mb-15">
                        <div class="col-lg-6">
                            <label>Имя</label>
                            <div class="input-group d-block w-100">
                                <input type="text" class="input-custom pl-15 text-left w-100"
                                       placeholder="Ваше имя" name="name" required>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <label>Телефон</label>
                            <div class="input-group d-block w-100">
                                <input type="text" class="input-custom pl-15 text-left w-100 phone_number"
                                       placeholder="+7 (000) 0000000" name="phone" required>
                            </div>
                        </div>

                    </div>

                    <div class="row form-group my-5">
                        <div class="col-lg-8 col-xl-5 mx-auto">
                            <button type="submit" class="btn bg-blue text-white btn-lg w-100 calc_osago">Отправить
                            </button>
                        </div>
                    </div>

                    <div class="row form-group form-check mt-4 p-4 mob-padd">
                        <div class="col-lg-8 col-xl-6 mx-auto">
                            <label class="check"><span>Согласен на обработку персональных данных в соответствии с <a
                                            href="{{route('policy')}}" target="_blank" class="terms">Политикой конфиденциальности сайта</a></span>
                                <input type="checkbox" checked name="is_name" class="casco_agree">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script src="https://sravni.ru/f/apps/build/widgets/sravni-widgets.js"></script>
    <script src="{{asset('js/jquery.validate.js')}}"></script>
    <script>

        $(document).ready(function () {
            $('.calculator-vzr__container .calculator-vzr__inner').addClass('aaa');
            var agree2 = $('input.casco_agree');
            $('input.casco_agree').on('click', function () {
                if (agree2.is(':checked')) {
                    $('button.calc_travel').prop('disabled', false)
                } else {
                    $('button.calc_travel').prop('disabled', true)
                }
            });
            $(".dropdown-menu li a").click(function () {
                var selText = $(this).text();
                $(this).parent('.btn-group').find('.btn-custom').html(selText + ' <i class="fa fa-chevron-down down"></i>');
            });
            $('input[name="dates"]').daterangepicker({
                opens: 'center',
                drops: 'down',
                applyButtonClasses: 'bg-blue text-white',
                locale: {
                    "format": "DD/MM/YYYY",
                    "separator": " - ",
                    "applyLabel": "Быбрать",
                    "cancelLabel": "Отменить",
                    "fromLabel": "От",
                    "toLabel": "До",
                    "customRangeLabel": "Custom",
                    "weekLabel": "W",
                    "daysOfWeek": [
                        "Вс",
                        "Пон",
                        "Вт",
                        "Ср",
                        "Чт",
                        "Пт",
                        "Сб"
                    ],
                    "monthNames": [
                        "Январь",
                        "Февраль",
                        "Март",
                        "Апрель",
                        "Май",
                        "Июнь",
                        "Июль",
                        "Август",
                        "Сентябрь",
                        "Октяврь",
                        "Ноябрь",
                        "Декабрь"
                    ],
                    "firstDay": 1
                },
                autoUpdateInput: false
            });
            $('input[name="dates"]').on('apply.daterangepicker', function (ev, picker) {
                $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
            });

            $('input[name="dates"]').on('cancel.daterangepicker', function (ev, picker) {
                $(this).val('');
            });


            function incrementValue(e) {
                e.preventDefault();
                var fieldName = $(e.target).data('field');
                var parent = $(e.target).closest('div');
                var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

                if (!isNaN(currentVal)) {
                    parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
                } else {
                    parent.find('input[name=' + fieldName + ']').val(0);
                }
            }

            function decrementValue(e) {
                e.preventDefault();
                var fieldName = $(e.target).data('field');
                var parent = $(e.target).closest('div');
                var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

                if (!isNaN(currentVal) && currentVal > 0) {
                    parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
                } else {
                    parent.find('input[name=' + fieldName + ']').val(0);
                }
            }

            $('.input-group').on('click', '.button-plus', function(e) {
                incrementValue(e);
            });

            $('.input-group').on('click', '.button-minus', function(e) {
                decrementValue(e);
            });
            $("form button.submit").click(function (e) {

                var form = $('#travel'),
                    formData = new FormData(),
                    formParams = form.serializeArray();

                $.each(form.find('input[name="dates"]'), function (i, tag) {
                    $.each($(tag)[0].files, function (i, file) {
                        formData.append(tag.name, file);
                    });
                });

                $.each(formParams, function (i, val) {
                    formData.append(val.name, val.value);
                });

                e.preventDefault();
                if(! form.valid()) {

                    return false;
                }
                $.ajax({
                    type: "POST",
                    url: "o/travel1",
                    data: formData,
                    processData: false,
                    contentType:
                        false,

                    success: function () {
                        Swal({
                            title: 'Большое спасибо,',
                            text: 'С вами свяжется в ближайшее время наш менеджер',
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }

                })
                ;


            });
            $("form#askManager").submit(function (e) {

                var form = $('#askManager'),
                    formData = new FormData(),
                    formParams = form.serializeArray();

                $.each(formParams, function (i, val) {
                    formData.append(val.name, val.value);
                });

                e.preventDefault();
                if(! form.valid()) {

                    return false;
                }
                $.ajax({
                    type: "POST",
                    url: "o/travel2",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function () {
                        Swal({
                            title: 'Большое спасибо,',
                            text: 'С вами свяжется в ближайшее время наш менеджер',
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }

                });
            });

        })
    </script>
@stop