@extends('layouts.header-footer')
@section('content')
    <div id="hero-slider-style6" class="d-flex align-items-center osago sport">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="hero-one-content">
                        <p class="text-white bordered pl-4 mb-30 w-50">Имущество</p>
                        <p class="text-white pl-4 pb-200">Чтобы рассчитать стоимость страховки,
                            заполните форму</p>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- hero-slider     -->

    <div class="js-featured-services pb-100 osago sport_sect">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-10 mx-auto">
                    <div class="row featured-services-row">
                        <div class="col-lg-12 p-60-30">
                            <form autocomplete="off" id="estate">
                                {{csrf_field()}}
                                <div class="row form-group mb-60">
                                    <div class="col-lg-4">
                                        <label>Ваше имя</label>
                                        <div class="input-group d-block w-100">
                                            <input type="text" class="input-custom pl-15 text-left w-100"
                                                   placeholder="Имя" name="person_name" required>
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <label>Что страхуем</label>
                                        <div class="input-group d-block w-100">
                                            <input type="text" class="input-custom pl-15 text-left w-100"
                                                   placeholder="Например: Дом, квартира или другое" name="estate_name"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Телефон</label>
                                        <div class="input-group d-block w-100">
                                            <input type="text" class="input-custom pl-15 text-left w-100 phone_number"
                                                   placeholder="+7 (000) 0000000" name="phone" required>
                                        </div>
                                    </div>


                                </div>

                                <div class="row form-group">
                                    <div class="col-lg-5 mx-auto">
                                        <button type="submit" class="btn bg-blue text-white btn-lg w-100 calc_estate sumbit">
                                            Рассчитать стоимость
                                        </button>
                                    </div>
                                </div>

                                <div class="row form-group form-check mt-4 p-4 mob-padd">
                                    <div class="col-lg-8 col-xl-6 mx-auto">
                                        <label class="check"><span>Согласен на обработку персональных данных в соответствии с <a
                                                        href="{{route('policy')}}" target="_blank" class="terms">Политикой конфиденциальности сайта</a></span>
                                            <input type="checkbox" checked name="is_name" class="estate_agree">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>

            </div><!-- row -->
        </div><!-- container-fluid -->
    </div><!-- featured-services -->

    {{--<div class="container osago">
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
@endsection
@section('script')
    <script src="{{asset('js/jquery.validate.js')}}"></script>
    <script>
        $(document).ready(function () {
            $(".dropdown-menu li a").click(function () {
                var selText = $(this).text();
                $(this).parent('.btn-group').find('.btn-custom').html(selText + ' <i class="fa fa-chevron-down down"></i>');
            });

            var agree2 = $('input.estate_agree');
            $('input.estate_agree').on('click', function () {
                if (agree2.is(':checked')) {
                    $('button.calc_estate').prop('disabled', false)
                } else {
                    $('button.calc_estate').prop('disabled', true)
                }
            });
            $("form").submit(function (e) {

                var form = $('#estate'),
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
                    url: "o/estate",
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