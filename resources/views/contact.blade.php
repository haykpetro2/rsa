@extends('layouts.header-footer')
@section('content')
    <div id="hero-slider-style6" class="d-flex align-items-center osago term ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="hero-one-content">
                        <p class="text-white bordered pl-4 mb-30 w-100" id="policy">Реквизиты</p>
                        <p class="text-white pl-4 pb-200">Юридическая информация о компании</p>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- hero-slider     -->

    <div class="js-featured-services pb-100 osago">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-9 mx-auto">
                    <div class="row featured-services-row p-100-90 pb-200">
                        <div class="col-lg-6">
                            <p>+7 961 588 29 99</p>
                            <p>rsa.strahovanie@gmail.com</p>
                            <p>
                                График работы:<br/>
                                Пн - Сб 8:30 - 19:00
                            </p>
                            <p>
                                Адрес:<br/>
                                Россия, г. Краснодар, ул. Ленина 90
                            </p>

                        </div>
                        <div class="col-lg-6 col-xl-4 policy">
                            <div class="cta-form ">
                                <form id="contact">
                                    <p class="write">Напишите нам, если у вас есть вопрос или предложение</p>
                                    <div class="row form-group">

                                        <div class="col-lg-12 mb-20">
                                            <label class="control-label">Ваше имя</label>
                                            <input type="text" required="required" name="name" class="form-control input-custom w-100 pl-13" placeholder="Имя">
                                        </div>
                                        <div class="col-lg-12 mb-20">
                                            <label class="control-label">Ваша почта</label>
                                            <input type="email" required="required" name="email" class="form-control input-custom w-100 pl-13" placeholder="Email">
                                        </div>
                                        <div class="col-lg-12 mb-20">
                                            <textarea required="required" name="comment" class="form-control input-custom w-100 pl-13 h-100px" placeholder="Комментарий"></textarea>
                                            <small>
                                                Нажимая на кнопку отправить вы соглашаетесь с политикой конфиденциальности сайта, которая доступна по адресу http://рса-страхование.рф/privacypolicy
                                            </small>
                                        </div>
                                        <div class="col-lg-8">
                                            <button type="submit" id="sendMessage" href="javascript:void(0);" class="btn bg-blue text-white w-100">Отправить</button>
                                        </div>
                                    </div>

                                </form> <!-- form -->
                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- row -->
        </div><!-- container-fluid -->
    </div><!-- featured-services -->
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $("form button#sendMessage").click(function (e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "o/msg",
                    data: $('#contact').serialize(),

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
        })
    </script>
@stop