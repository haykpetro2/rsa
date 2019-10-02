@extends('layouts.header-footer')
@section('content')
    <div id="hero-slider-style6" class="d-flex align-items-center osago himself">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 mx-auto col-md-10 col-sm-10">
                    <div class="hero-one-content">
                        <p class="text-white bordered pl-4 mb-30 w-50">ОСАГО</p>
                        <p class="text-white pl-4 pb-200">Пожалуйста, вводите данные корректно.<br/>
                            Допущенные ошибки анулируют электронный полис.</p>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- hero-slider     -->

    <div class="js-featured-services pb-100 osago himself">
        <div class="container-fluid">
            <div class="row ">

                <div class="col-lg-8 mx-auto">
                    <div class="frame" style="-webkit-overflow-scrolling:touch;overflow:auto;">
                        <iframe src="https://agentpolis.ru/bdf3f54642b2d80f8e87b6474eaaad11ece8058a/eosago" width="100%" height="2000px" frameborder="0" scrolling="no">
                            Ваш браузер не поддерживает плавающие фреймы!
                        </iframe>
                    </div>

                    {{--<div class="row featured-services-row">
                        <div class="stepwizard col-lg-8 mx-auto d-none">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                    <p>Step 1</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">2</a>
                                    <p>Step 2</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">3</a>
                                    <p>Step 3</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-4" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">4</a>
                                    <p>Step 4</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-5" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">5</a>
                                    <p>Step 5</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-6" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">5</a>
                                    <p>Step 6</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 p-40-30 step-by-step">
                            <form role="form" action="{{route('formYourself')}}" method="post">
                                {!! csrf_field() !!}
                                <div class="row setup-content" id="step-1">
                                    <div class="col-lg-12">
                                        <div class="col-md-12">
                                            <h3>1(из 5) Информация о страхователе <span >Ваши данные: ID XXX XXX</span>
                                            </h3>
                                            <h4 class="w-65">Страхователь — это покупатель полиса. По закону РФ
                                                страхователь должен быть старше 18 лет. Страхователь может не являться
                                                водителем ТС.</h4>
                                            <h4 class="w-65">Указывайте точные данные, они будут отображены в страховом
                                                полисе.</h4>
                                            <div class="row form-group">
                                                <div class="col-lg-12">
                                                    <label class="control-label">Фамилия, имя и отчество
                                                        страхователя</label>
                                                    <input type="text" required="required"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="Иванов Иван Иванович" name="insurant_name"/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-4">
                                                    <label class="control-label">Дата рождения</label>
                                                    <input type="text" required="required"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="ДД. ММ. ГГ." id="birthday" name="insurant_birthday"/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="control-label">Серия и номер паспорта</label>
                                                    <input type="text" required="required"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="0000-000000" name="insurant_passport"/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="control-label">Дата выдачи паспорта</label>
                                                    <input type="text" required="required" name="insurant_passport_date"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="ДД. ММ. ГГ." id="passDate"/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-12">
                                                    <label class="control-label">Кем выдан паспорт</label>
                                                    <input type="text" required="required"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="Введите данные" name="insurant_passport_by"/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-12">
                                                    <label class="control-label">Адрес постоянной регистрации</label>
                                                    <input type="text" required="required"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="Введите данные" name="insurant_address"/>
                                                </div>
                                            </div>

                                            <a type="button" href="{{route('osagoForm1')}}"
                                               class="btn btn-grey-outline pull-left"><i
                                                        class="fa fa-angle-left"></i> Назад </a>
                                            <a type="button" class="btn btn-blue-outline nextBtn pull-right">Далее <i
                                                        class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row setup-content" id="step-2">
                                    <div class="col-lg-12">
                                        <div class="col-md-12">
                                            <h3>2(из 5) Информация о собственнике авто
                                                <span>Ваши данные: ID XXX XXX</span></h3>
                                            <h4 class="w-65">Заполняйте внимательно, эта информация будет указана в
                                                страховом полисе!</h4>
                                            <h4 class="w-65">Паспортные данные собственника автомобиля необходимы для
                                                оформления страхового полиса.</h4>

                                            <div class="row form-group form-check mt-4">
                                                <label class="check w-88"><span>Собственник является страхователем</span>
                                                    <input type="checkbox" checked="checked" name="is_name">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-12">
                                                    <label class="control-label">Фамилия, имя и отчество
                                                        страхователя</label>
                                                    <input type="text" required="required" name="owner_name"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="Иванов Иван Иванович"/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-4">
                                                    <label class="control-label">Дата рождения</label>
                                                    <input type="text" required="required" name="owner_birthday"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="ДД. ММ. ГГ." id="birthday2"/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="control-label">Серия и номер паспорта</label>
                                                    <input type="text" required="required" name="owner_passport"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="0000-000000"/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="control-label">Дата выдачи паспорта</label>
                                                    <input type="text" required="required" name="owner_passport_date"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="ДД. ММ. ГГ." id="passDate2"/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-12">
                                                    <label class="control-label">Кем выдан паспорт</label>
                                                    <input type="text" required="required" name="owner_passport_by"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="Введите данные"/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-12">
                                                    <label class="control-label">Адрес постоянной регистрации</label>
                                                    <input type="text" required="required" name="owner_address"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="Введите данные"/>
                                                </div>
                                            </div>

                                            <a type="button" class="btn btn-grey-outline prevBtn pull-left"><i
                                                        class="fa fa-angle-left"></i> Назад </a>
                                            <a type="button" class="btn btn-blue-outline nextBtn pull-right">Далее <i
                                                        class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row setup-content" id="step-3">
                                    <div class="col-lg-12">
                                        <div class="col-md-12">
                                            <h3>3(из 5) Водители авто <span>Ваши данные: ID XXX XXX</span></h3>
                                            <h4 class="w-65">Укажите данные всех водителей, которые будут вписаны в
                                                полис. На основе этих данных будет рассчитана скидка на полис. Итоговая
                                                сумма может измениться как в меньшую, так и в большую сторону.</h4>
                                            <h4 class="w-65">Вы можете убрать или добавить водителя, чтобы выбрать цену,
                                                которая вам подходит используя кнопку Назад.</h4>
                                            <p class="py-4">Иванов Иван Иванович <a href="javascript:void(0)"
                                                                                    class="btn add-link"><i
                                                            class="fa fa-plus"></i> Добавить в форму</a></p>
                                            <h2 class="w-100 driver-type mb-30">Водитель 1</h2>
                                            <div class="row form-group">
                                                <div class="col-lg-9">
                                                    <label class="control-label">Фамилия, имя и отчество
                                                        страхователя</label>
                                                    <input type="text" required="required" name="driver_name"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="Иванов Иван Иванович"/>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="control-label">Дата рождения</label>
                                                    <input type="text" required="required" name="driver_birthday"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="ДД. ММ. ГГ." id="birthday3"/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-4">
                                                    <label class="control-label">Дата выдачи прав</label>
                                                    <input type="text" required="required" name="driver_license_date"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="ДД. ММ. ГГ." id="licenseDate"/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="control-label">Серия и номер прав</label>
                                                    <input type="text" required="required" name="driver_license"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="0000-000000"/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="control-label">Дата начала стажа</label>
                                                    <input type="text" required="required" name="driver_exp_start"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="ДД. ММ. ГГ." id="stajDate"/>
                                                </div>
                                            </div>
                                            <p class="pb-4"><a href="javascript:void(0)" class="btn remove-link"><i
                                                            class="fa fa-times"></i> Удалить водителя</a> <a
                                                        href="javascript:void(0)" class="btn add-link"><i
                                                            class="fa fa-plus"></i> Добавить водителя</a></p>

                                            <a type="button" class="btn btn-grey-outline prevBtn pull-left"><i
                                                        class="fa fa-angle-left"></i> Назад </a>
                                            <a type="button" class="btn btn-blue-outline nextBtn pull-right">Далее <i
                                                        class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row setup-content" id="step-4">
                                    <div class="col-lg-12">
                                        <div class="col-md-12">
                                            <h3>4(из 5) Информация об авто <span>Ваши данные: ID XXX XXX</span></h3>
                                            <h4 class="w-65">Укажите данные автомобиля. Их можно найти в Свидетельстве
                                                регистрации транспортного средства или в Паспорте транспортного
                                                средства.</h4>
                                            <h4 class="w-65">Если вы покупаете автомобиль, и у вас ещё нет
                                                регистрационного номера, оставьте это поле пустым.</h4>
                                            <div class="row form-group">
                                                <div class="col-lg-4">
                                                    <label class="control-label">Марка автомобиля</label>
                                                    <div class="btn-group d-block w-100">
                                                        <select name="car_mark" id="model" title="Выберите марку" class="selectModel btn btn-custom border-custom pl-15 text-left w-100">
                                                            <option value="-" >Выберите марку</option>
                                                            @foreach($marks->markEntry as $item)
                                                                <option class="dropdown-item " data-id="{{$item->id}}" value="{{$item->value}}">
                                                                    {{$item->value}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="control-label">Модель автомобиля</label>
                                                    <div class="btn-group d-block w-100">
                                                        <select name="cal_model" id="models" class="btn btn-custom border-custom pl-15 text-left w-100">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="control-label">Регистрационный номер</label>
                                                    <input type="text" required="required" name="car_number"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="А 123 АА 123"/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-4">
                                                    <label class="control-label">VIN</label>
                                                    <input type="text" required="required" name="car_vin"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="Номер"/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="control-label">Мощность</label>
                                                    <input type="text" required="required" name="car_ph"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="Л.С."/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="control-label">Год выпуска авто</label>
                                                    <div class="btn-group d-block w-100">
                                                        <select name="car_year" class="btn btn-custom border-custom pl-15 text-left w-100">
                                                            <option value="-" disabled>Выберите год</option>
                                                            <option class="dropdown-item " value="2019">2019</option>
                                                            <option class="dropdown-item " value="2018">2018</option>
                                                            <option class="dropdown-item " value="2017">2017</option>
                                                            <option class="dropdown-item " value="2016">2016</option>
                                                            <option class="dropdown-item " value="2015">2015</option>

                                                        </select>
                                                        --}}{{--<a class="btn btn-custom border-custom pl-15 text-left w-100"
                                                           data-toggle="dropdown" href="#" name="car_year">Выберите год</a><i
                                                                class="fa fa-chevron-down down"></i>
                                                        <ul class="dropdown-menu">
                                                            <li class="dropdown-item"><a href="javascript:void(0);">Item
                                                                    I</a></li>
                                                            <li class="dropdown-item"><a href="javascript:void(0);">Item
                                                                    II</a></li>
                                                            <li class="dropdown-item"><a href="javascript:void(0);">Item
                                                                    III</a></li>
                                                            <li class="dropdown-item"><a href="javascript:void(0);">Item
                                                                    V</a></li>
                                                            <li class="dropdown-item"><a href="javascript:void(0);">Other</a>
                                                            </li>
                                                        </ul>--}}{{--
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-4">
                                                    <label class="control-label">Тип документа</label>
                                                    <div class="btn-group d-block w-100">
                                                        <select name="doc_type" class="btn btn-custom border-custom pl-15 text-left w-100">
                                                            <option class="dropdown-item " value="СТС">СТС</option>
                                                            <option class="dropdown-item " value="СТС1">СТС1</option>

                                                        </select>
                                                        --}}{{--<a class="btn btn-custom border-custom pl-15 text-left w-100"
                                                           data-toggle="dropdown" href="#" name="doc_type">СТС</a><i
                                                                class="fa fa-chevron-down down"></i>
                                                        <ul class="dropdown-menu">
                                                            <li class="dropdown-item"><a href="javascript:void(0);">Item
                                                                    I</a></li>
                                                            <li class="dropdown-item"><a href="javascript:void(0);">Item
                                                                    II</a></li>
                                                            <li class="dropdown-item"><a href="javascript:void(0);">Item
                                                                    III</a></li>
                                                            <li class="dropdown-item"><a href="javascript:void(0);">Item
                                                                    V</a></li>
                                                            <li class="dropdown-item"><a href="javascript:void(0);">Other</a>
                                                            </li>
                                                        </ul>--}}{{--
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="control-label">Серия и номер документа</label>
                                                    <input type="text" required="required" name="car_doc_number"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="0000-000000"/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="control-label">Дата выдачи документа</label>
                                                    <input type="text" required="required" name="car_doc_date"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="ДД. ММ. ГГ." id="docDate"/>
                                                </div>

                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-4 mx-auto">
                                                    <label class="control-label">Начало срока страхования с</label>
                                                    <input type="text" required="required" name="insurance_start"
                                                           class="form-control input-custom w-100 pl-13"
                                                           placeholder="ДД. ММ. ГГ." id="insBegin"/>
                                                </div>

                                            </div>


                                            <a type="button" class="btn btn-grey-outline prevBtn pull-left"><i
                                                        class="fa fa-angle-left"></i> Назад </a>
                                            <a type="button" class="btn btn-blue-outline nextBtn pull-right">Далее <i
                                                        class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row setup-content" id="step-5">
                                    <div class="col-lg-12">
                                        <div class="col-md-12">
                                            <h3>5(из 5) Финальная стоимость <span>Ваши данные: ID XXX XXX</span></h3>
                                            <h4 class="w-65">11 200 ₽</h4>
                                            <p class="w-65">Если цена страхового полиса изменилась, то это произошло
                                                потому, что введенные данные отличаются от тех, которые вы указали
                                                изначально.</p>

                                            <a type="button" class="btn btn-grey-outline prevBtn pull-left"><i
                                                        class="fa fa-angle-left"></i> Назад </a>
                                            <a type="button" href="javascript:void(0);"
                                               class="btn bg-blue nextBtn text-white pull-right">Завершить оформление <i
                                                        class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row setup-content" id="step-6">
                                    <div class="col-lg-12">
                                        <div class="col-md-12">
                                            <h3>Оплата <span>Ваши данные: ID XXX XXX</span></h3>
                                            <h4 class="w-65">11 200 ₽</h4>
                                            <h3 class="border-bottom pb-40 mb-0">Проверьте данные и если все корректно,
                                                нажмите кнопку Оплатить.</h3>

                                            <div class="row mt-40">
                                                <h2 class="w-100 driver-type mb-30 pl-3">Информация о страхователе <a
                                                            href="javascript:void(0)" class="btn add-link"><i
                                                                class="fa fa-pencil underlined"></i> Изменить данные</a>
                                                </h2>

                                                <div class="col-lg-12 border-bottom pb-40">
                                                    <p><span>ФИО: </span>Иванов Иван Иванович</p>
                                                    <p><span>Дата рождения: </span>24. 05. 1950</p>
                                                    <p><span>Паспорт: </span>1234 123456</p>
                                                    <p><span>Дата выдачи: </span>12. 04. 2010</p>
                                                    <p><span>Выдан: </span>УФМС Московкой Области Отделением 45</p>
                                                    <p><span>Зарегистрирован: </span>г. Москва, Ул. Ленина 95, Кв. 75
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row mt-40">
                                                <h2 class="w-100 driver-type mb-30 pl-3">Информация о собственнике авто
                                                    <a href="javascript:void(0)" class="btn add-link"><i
                                                                class="fa fa-pencil underlined"></i> Изменить данные</a>
                                                </h2>

                                                <div class="col-lg-12 border-bottom pb-40">
                                                    <p><span>ФИО: </span>Иванов Иван Иванович</p>
                                                    <p><span>Дата рождения: </span>24. 05. 1950</p>
                                                    <p><span>Паспорт: </span>1234 123456</p>
                                                    <p><span>Дата выдачи: </span>12. 04. 2010</p>
                                                    <p><span>Выдан: </span>УФМС Московкой Области Отделением 45</p>
                                                    <p><span>Зарегистрирован: </span>г. Москва, Ул. Ленина 95, Кв. 75
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row mt-40">
                                                <h2 class="w-100 driver-type mb-30 pl-3">Водитель 1 <a
                                                            href="javascript:void(0)" class="btn add-link"><i
                                                                class="fa fa-pencil underlined"></i> Изменить данные</a>
                                                </h2>

                                                <div class="col-lg-12 border-bottom pb-40">
                                                    <p><span>ФИО: </span>Иванов Иван Иванович</p>
                                                    <p><span>Дата рождения: </span>24. 05. 1950</p>
                                                    <p><span>Серия и номер прав: </span>1234 123456</p>
                                                    <p><span>Дата выдачи прав: </span>12. 04. 2010</p>
                                                    <p><span>Дата начала стажа: </span>01. 04. 2000</p>
                                                </div>
                                            </div>

                                            <div class="row mt-40">
                                                <h2 class="w-100 driver-type mb-30 pl-3">Информация об авто<a
                                                            href="javascript:void(0)" class="btn add-link"><i
                                                                class="fa fa-pencil underlined"></i> Изменить данные</a>
                                                </h2>

                                                <div class="col-lg-12 border-bottom pb-40">

                                                    <p><span>Марка автомобиля: </span>Alfa-Romeo</p>
                                                    <p><span>Модель автомобиля: </span>Largus</p>
                                                    <p><span>Регистрационный номер: </span>1234 123456</p>
                                                    <p><span>VIN: </span>1234567890</p>
                                                    <p><span>Мощность: </span>200 л.с.</p>
                                                    <p><span>Год выпуска авто: </span>2010</p>
                                                    <p><span>Тип документа: </span>СТС</p>
                                                    <p><span>Серия и номер документа: </span>1234 123456</p>
                                                    <p><span>Дата выдачи документа: </span>12.04.2010</p>
                                                    <p><span>Начало срока страхования с: </span>03.04.2019</p>
                                                </div>
                                            </div>
                                            <div class="row form-group my-5">
                                                <div class="col-lg-8 col-xl-5 mx-auto">
                                                    --}}{{--<a type="submit" href="javascript:void(0);" data-toggle="modal"
                                                       data-target="#thank_you"
                                                       class="btn bg-blue text-white btn-lg w-100">Оплатить</a>--}}{{--
                                                    <input type="submit" class="btn bg-blue text-white btn-lg w-100" value="Оплатить">
                                                </div>
                                            </div>
                                            <div class="row form-group form-check mt-4 p-4">
                                                <div class="col-lg-8 col-xl-4 mx-auto">
                                                    <label class="check"><span>Согласен на обработку персональных данных в соответствии с <a
                                                                    href="{{route('policy')}}" target="_blank" class="terms">Политикой конфиденциальности сайта</a></span>
                                                        <input type="checkbox" checked="checked" name="is_name">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>--}}
                </div>

            </div><!-- row -->
        </div><!-- container-fluid -->

    </div><!-- featured-services -->
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
                            <button type="submit" class="btn bg-blue text-white btn-lg w-100 calc_osago submit">Отправить
                            </button>
                        </div>
                    </div>

                    <div class="row form-group form-check mt-4 p-4">
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
    <script type="text/javascript"
            src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
    <script type="text/javascript"
            src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.ru-ru.js" type="text/javascript"></script>
    <script>
        /*function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("marks");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }*/

        $(document).ready(function () {
            /*$('#birthday').datepicker({
                uiLibrary: 'bootstrap',
                format:'dd/mm/yyyy',
                locale: 'ru-ru',
                weekStartDay: 1
            });
            $('#birthday2').datepicker({
                uiLibrary: 'bootstrap',
                format:'dd/mm/yyyy',
                locale: 'ru-ru',
                weekStartDay: 1
            });
            $('#birthday3').datepicker({
                uiLibrary: 'bootstrap',
                format:'dd/mm/yyyy',
                locale: 'ru-ru',
                weekStartDay: 1
            });
            $('#passDate').datepicker({
                uiLibrary: 'bootstrap',
                format:'dd/mm/yyyy',
                locale: 'ru-ru',
                weekStartDay: 1
            });
            $('#passDate2').datepicker({
                uiLibrary: 'bootstrap',
                format:'dd/mm/yyyy',
                locale: 'ru-ru',
                weekStartDay: 1
            });
            $('#licenseDate').datepicker({
                uiLibrary: 'bootstrap',
                format:'dd/mm/yyyy',
                locale: 'ru-ru',
                weekStartDay: 1
            });
            $('#stajDate').datepicker({
                uiLibrary: 'bootstrap',
                format:'dd/mm/yyyy',
                locale: 'ru-ru',
                weekStartDay: 1
            });
            $('#docDate').datepicker({
                uiLibrary: 'bootstrap',
                format:'dd/mm/yyyy',
                locale: 'ru-ru',
                weekStartDay: 1
            });
            $('#insBegin').datepicker({
                uiLibrary: 'bootstrap',
                format:'dd/mm/yyyy',
                locale: 'ru-ru',
                weekStartDay: 1
            });

            $('.selectModel').on('change', function () {
                $.ajax({
                    url: '/formYourself',
                    type: 'post',
                    data: {id:$(this).find('option:selected').data('id')},
                    success: function (data) {
                        $('#models').html(data);
                    }
                })
            });

            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn'),
                allPrevBtn = $('.prevBtn');

            /!*allWells.hide();*!/

            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);

                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-primary').addClass('btn-default');
                    $item.addClass('btn-primary');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });

            allNextBtn.click(function () {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                /!*for(var i=0; i<curInputs.length; i++){
                    if (!curInputs[i].validity.valid){
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }*!/

                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            });
            allPrevBtn.click(function () {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                /!*for(var i=0; i<curInputs.length; i++){
                    if (!curInputs[i].validity.valid){
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }*!/

                if (isValid)
                    prevStepWizard.removeAttr('disabled').trigger('click');
            });

            $('div.setup-panel div a.btn-primary').trigger('click');*/
            var agree2 = $('input.casco_agree');
            $('input.casco_agree').on('click', function () {
                if (agree2.is(':checked')) {
                    $('button.calc_osago').prop('disabled', false)
                } else {
                    $('button.calc_osago').prop('disabled', true)
                }
            });
            $("form").submit(function (e) {

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
                    url: "o/osago3",
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
        });
    </script>
@endsection