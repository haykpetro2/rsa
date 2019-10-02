@extends('layouts.header-footer')
@section('content')
    <div id="hero-slider-style6" class="d-flex align-items-center osago sport">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="hero-one-content">
                        <p class="text-white bordered pl-4 mb-30 w-50">Спорт</p>
                        <p class="text-white pl-4 pb-200">Чтобы рассчитать стоимость услуги
                            выберите необходимые параметры</p>
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
                            <form autocomplete="off">
                                <div class="row form-group mb-60">
                                    <div class="col-lg-4">
                                        <label>Вид спорта</label>
                                        <div class="btn-group d-block w-100">
                                            <a class="btn btn-custom border-custom pl-15 text-left w-100" data-toggle="dropdown" href="#">Выберите</a><i class="fa fa-chevron-down down"></i>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item"><a href="javascript:void(0);">Item I</a></li>
                                                <li class="dropdown-item"><a href="javascript:void(0);">Item II</a></li>
                                                <li class="dropdown-item"><a href="javascript:void(0);">Item III</a></li>
                                                <li class="dropdown-item"><a href="javascript:void(0);">Item V</a></li>
                                                <li class="dropdown-item"><a href="javascript:void(0);">Other</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <label>Спортсмены</label>
                                        <div class="btn-group d-block w-100">
                                            <a class="btn btn-custom border-custom pl-15 text-left w-100" data-toggle="dropdown" href="#">Выберите</a><i class="fa fa-chevron-down down"></i>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item"><a href="javascript:void(0);">Item I</a></li>
                                                <li class="dropdown-item"><a href="javascript:void(0);">Item II</a></li>
                                                <li class="dropdown-item"><a href="javascript:void(0);">Item III</a></li>
                                                <li class="dropdown-item"><a href="javascript:void(0);">Item V</a></li>
                                                <li class="dropdown-item"><a href="javascript:void(0);">Other</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Период страхования</label>
                                        <input type="text" required="required" name="dates" autocomplete="off" class="form-control input-custom w-100 pl-13 h-45" placeholder="ДД. ММ. ГГ. - ДД. ММ. ГГ.">
                                    </div>


                                </div>

                                <div class="row form-group">
                                    <div class="col-lg-5 mx-auto">
                                        <button type="button"  class="btn bg-blue text-white btn-lg w-100 calc_sport">Рассчитать стоимость</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>

            </div><!-- row -->
        </div><!-- container-fluid -->
    </div><!-- featured-services -->

    <div class="container osago">
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
                                    <p class="text-left">Купить электронный Полис очень просто - достаточно иметь действующие документы</p>
                                </div>
                            </div><!-- timeline-container -->
                            <div class="timeline-container mb-50 right">
                                <div class="content">
                                    <h4 class="mb-10 font-weight-normal">ЭТО УДОБНО</h4>
                                    <p class="text-left">Электронный Полис онлайн будет оформлен без посещения офиса и длительных ожиданий в очередях</p>
                                </div>
                            </div><!-- timeline-container -->
                            <div class="timeline-container mb-50 right">
                                <div class="content">
                                    <h4 class="mb-10 font-weight-normal">ЭТО БЕЗОПАСНО</h4>
                                    <p class="text-left">Оплата страховки через интернет осуществляется в защищенном режиме HTTPS</p>
                                </div>
                            </div><!-- timeline-container -->
                            <div class="timeline-container mb-50 right">
                                <div class="content">
                                    <h4 class="mb-10 font-weight-normal">ЭТО БЫСТРО</h4>
                                    <p class="text-left">Оформленный страховой полис приходит на e-mail сразу после оплаты и сохранения</p>
                                </div>
                            </div><!-- timeline-container -->
                            <div class="timeline-container mb-50 right">
                                <div class="content">
                                    <h4 class="mb-10 font-weight-normal">ЭТО ЗАКОННО</h4>
                                    <p class="text-left">Присылаемый на e-mail Полис равен традиционному (бумажному) Полису</p>
                                </div>
                            </div><!-- timeline-container -->
                            <div class="timeline-container mb-50 right">
                                <div class="content">
                                    <h4 class="mb-10 font-weight-normal">ЭТО ВЫГОДНО</h4>
                                    <p class="text-left">Цена электронного Полиса на нашем сайте не отличается от цены на сайте страховой компании-партнера</p>
                                </div>
                            </div><!-- timeline-container -->
                        </div> <!-- timeline -->
                    </div><!-- content -->
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".dropdown-menu li a").click(function(){
                var selText = $(this).text();
                $(this).parent('.btn-group').find('.btn-custom').html(selText+' <i class="fa fa-chevron-down down"></i>');
            });
            $('input[name="dates"]').daterangepicker({
                opens: 'center',
                drops: 'down',
                applyButtonClasses:'bg-blue text-white',
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
            $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
            });

            $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });
        })
    </script>
@stop