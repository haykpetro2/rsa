@extends('layouts.header-footer')
@section('content')
    <div id="hero-slider-style6" class="d-flex align-items-center osago">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="hero-one-content">
                        <p class="text-white bordered pl-4 mb-30 w-50">ОСАГО</p>
                        <p class="text-white pl-4 pb-200">Чтобы рассчитать стоимость услуги
                            необходимо отметить все пункты</p>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- hero-slider     -->

    <div class="js-featured-services pb-100 osago">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row featured-services-row">
                        <div class="col-lg-12 p-40-30">
                            <form id="frm-calc" method="post" role="form">
                                <div class="dynamic-fields">
                                <div class="form-group col-xs-12" style="display: none;">
                                    <label>@lang('form.osago.region_TC')</label><br/>
                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-default active">
                                            <input type="radio" name="region_TC" value="rf" checked='checked' class="dynamic-field"> @lang('form.osago.region_TC.rf')
                                        </label>
                                        <label class="btn btn-default">
                                            <input type="radio" name="region_TC" value="foreign" class="dynamic-field"> @lang('form.osago.region_TC.foreign')
                                        </label>
                                    </div>
                                </div>
                                <div class="row form-group mb-30 region_tc">

                                    <div class="col-lg-3">
                                        <label>Ваше местоположение</label>
                                        <div class="btn-group d-block w-100">
                                            <select name='region' id='region' class="btn btn-custom border-custom pl-15 text-left w-100 custom-selection"></select>
                                        </div>
                                        <small class="form-text text-muted">Укажите в каком городе вы
                                            находитесь
                                        </small>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="w-75">Регион регистрации собственника авто</label>
                                        <div class="btn-group d-block w-100">
                                            <select name='city' id='city' class="btn btn-custom border-custom pl-15 text-left w-100 custom-selection">
                                                <option value='1l'>---</option>
                                            </select>
                                        </div>
                                        <small class="form-text text-muted">Укажите регион прописки собственника
                                        </small>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="period">Период страхования</label>
                                        <div class="btn-group d-block w-100">
                                            <select name='period' id='period' class="btn btn-custom border-custom pl-15 text-left w-100 custom-selection">
                                                <option value='1'>1 год</option>
                                                <option value='0.95'>9 месяцев</option>
                                                <option value='0.9'>8 месяцев</option>
                                                <option value='0.8'>7 месяцев</option>
                                                <option value='0.7'>6 месяцев</option>
                                                <option value='0.65'>5 месяцев</option>
                                                <option value='0.6'>4 месяца</option>
                                                <option value='0.5'>3 месяца</option>
                                            </select>
                                        </div>
                                        <small class="form-text text-muted">На сколько месяцев планируете страховать авто
                                        </small>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="hp_ur">Мощность автомобиля</label>
                                        <div class="btn-group d-block w-100">
                                        <select name="hp_ur" id="hp_ur" class="btn btn-custom border-custom pl-15 text-left w-100 custom-selection">
                                            <option value='0.7'>До 50 л. с.</option>
                                            <option value='1'>51-70 л. с.</option>
                                            <option value='1.1'>71-100 л. с.</option>
                                            <option value='1.2' selected>101-120 л. с.</option>
                                            <option value='1.4'>121-150 л. с.</option>
                                            <option value='1.6'>151 л. с. и более</option>
                                        </select>
                                        </div>

                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col-lg-3">
                                        <label >Безаварийный стаж</label>
                                        <div class="btn-group d-block w-100">
                                            <a class="btn btn-custom border-custom pl-15 text-left w-100" data-toggle="dropdown" href="#">Выбрать</a><i class="fa fa-chevron-down down"></i>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item"><a href="javascript:void(0);">Item I</a></li>
                                                <li class="dropdown-item"><a href="javascript:void(0);">Item II</a></li>
                                                <li class="dropdown-item"><a href="javascript:void(0);">Item III</a></li>
                                                <li class="dropdown-item"><a href="javascript:void(0);">Item V</a></li>
                                                <li class="dropdown-item"><a href="javascript:void(0);">Other</a></li>
                                            </ul>
                                        </div>
                                        <small class="form-text text-muted">Сколько времени вы водите без аварий
                                        </small>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Тип страховки</label>
                                        <span class="radio">Ограниченная
                                            <input type="radio" checked="checked" name="type">
                                            <span class="checkround"></span>
                                        </span>
                                        <span class="radio">Без ограничений
                                            <input type="radio" name="type">
                                            <span class="checkround"></span>
                                        </span>

                                    </div>
                                    <div class="col-lg-3">
                                        <label>Стаж самого опытного водителя</label>
                                        <span class="radio">До 3 лет
                                            <input type="radio" checked="checked" name="experienced">
                                            <span class="checkround"></span>
                                        </span>
                                        <span class="radio">Более 3 лет
                                            <input type="radio" name="experienced">
                                            <span class="checkround"></span>
                                        </span>

                                    </div>
                                    <div class="col-lg-3">
                                        <label>Возраст самого младшего водителя</label>
                                        <span class="radio">До 3 лет
                                            <input type="radio" checked="checked" name="youngest">
                                            <span class="checkround"></span>
                                        </span>
                                        <span class="radio">Более 3 лет
                                            <input type="radio" name="youngest">
                                            <span class="checkround"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-5 mx-auto">
                                        <a type="button" href="{{route('osagoCalc')}}" class="btn bg-blue text-white btn-lg w-100">Рассчитать стоимость</a>
                                    </div>
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
                    электронный полис ОСАГО?</h2>

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
                                    <p class="text-left">Электронный Полис Е-ОСАГО онлайн будет оформлен без посещения офиса и длительных ожиданий в очередях</p>
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
                                    <p class="text-left">Присылаемый на e-mail Полис Е-ОСАГО равен традиционному (бумажному) Полису ОСАГО</p>
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




    <div class="container-fluid questions bg-grey pt-50 pb-60">
        <div class="row">
            <div class="section-title text-center w-100">
                <h2 class="heading-title-partners mx-auto w-45">Какие документы нужны для оформления электронного полиса?</h2>
            </div>
            <div class="col-lg-6 mx-auto">
                <p>• Паспорт собственника авто и страхователя (если это разные люди)</p>
                <p>• ПТС или свидетельство о регистрации автомобиля если он уже оформлен на вас</p>
                <p>• Водительские удостоверения всех лиц, которые допущены к управлению</p>
                <p>• Действительная диагностическая карта транспортного средства</p>
            </div>
        </div>
    </div>


    <div class="container-fluid questions pt-100 pb-100">
        <div class="row">
            <div class="section-title text-center w-100">
                <h2 class="heading-title-partners mx-auto w-40">Что делать если полис потребуют сотрудники ДПС?</h2>
            </div>
            <div class="col-lg-6 mx-auto">
                <p class="w-88">Наряд ДПС имеет возможность проверить ваш электронный полис ОСАГО онлайн через специальную сеть ИМТС МВД РФ или в базе РСА. При наличии в системе данных о заключении договора, согласно ч. 2 ст. 12.3 КоАП РФ, он не может привлечь вас к административной ответственности.</p>
                <p class="w-88">Распечатайте документ полученный на e-mail на листе А4 и всегда возите с собой. Дополнительно можно сохранить файл с электронной страховкой на своем смартфоне.</p>
                <p class="w-88">Также по требованию сотрудников ГИБДД вы можете просто предъявить бумажную распечатку полиса или показать файл на своем телефоне.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid questions bg-grey pt-50 pb-60">
        <div class="row">
            <div class="section-title text-center w-100">
                <h2 class="heading-title-partners mx-auto w-45">Если я допустил ошибку оформляя полис?</h2>
            </div>
            <div class="col-lg-6 mx-auto">
                <p>    Оформляя электронный страховой полис Е-ОСАГО, будьте предельно внимательны! Если вы нашли ошибку в страховом полисе, обязательно свяжитесь с нами.</p>
                <p>    Тщательно проверяйте соответствие вносимых вами данных с данными, указанными в документах. Помните, что если оформить электронное ОСАГО с ошибками или опечатками, могут возникнуть такие негативные последствия, как:</p>
                <p>    •	расторжение договора по инициативе страховщика за предоставление заведомо ложных сведений, влияющих на степень риска</p>
                <p>•	штрафные санкции при проверке документов сотрудниками ГИБДД</p>
                <p>•	регрессные требования страховщика при наступлении страхового случая</p>
            </div>
        </div>
    </div>

    <div class="container-fluid questions pt-100 pb-100">
        <div class="row">
            <div class="section-title text-center w-100">
                <h2 class="heading-title-partners mx-auto w-40">Когда вступает в силу электронный полис?</h2>
            </div>
            <div class="col-lg-6 mx-auto">
                <p class="w-100">Через 3 дня после покупки. Советуем внимательно следить за сроками действия старого полиса и оформлять новый полис заранее.</p>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('osagoframe/js/form.js')}}"></script>
@endsection