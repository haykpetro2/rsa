@extends('layouts.index')

@section('title', trans('pub.page.kasko.title'))

@section('content')

    @include('_partials/slider')

    <section id="main-container" class="main-container">
        <div class="container">
            <form action="{{action('OrdersController@postKasko')}}" id="frm-kasko" method="post" role="form">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                        <h2 class="page-title">Страхование КАСКО</h2>
                        <p>Прежде чем рассчитать КАСКО, стоит учесть, что условия страховки важны не менее, чем ее цена. Выбирайте то предложение, которое гарантирует вашему автомобилю наилучшую защиту.</p>

                        <div class="gap-40">&nbsp;</div>

                        <div class="insurance-items">
                            <div class="row">
                                <div class="col-sm-8 insurance-item-content">
                                    <h3>Калькулятор КАСКО</h3>
                                    <ul class="list-round-arrow">
                                        <li>Рассчитать оперативно стоимость КАСКО с учетом всех акций и специальных предложений.</li>
                                        <li>Сравнить предложения КАСКО от 15 ведущих страховых компаний.</li>
                                        <li>Вам не придется гадать, как правильно заполнить все поля. Калькулятор КАСКО сам подскажет, что делать.</li>
                                        <li>Расчет КАСКО на нашем сайте займет не более 10 минут.</li>
                                        <li>После заполнения специальной формы оператор Вам оперативно поможет и расскажет про все программы компаний</li>
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

                        <h3 class="contact-form-title">Расчет КАСКО</h3>

                        {{csrf_field()}}
                        <div class="error-container"></div>


                        <div class="row dynamic-fields">
                            <div class="col-sm-3">
                                <div class="form-group required">
                                    <label for="vehicle.make" class="control-label">@lang('form.vehicle.make')</label>
                                    <input class="form-control" name="vehicle.make" id="vehicle.make" type="text" value="" required>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group required">
                                    <label for="vehicle.model" class="control-label">@lang('form.vehicle.model')</label>
                                    <input class="form-control" name="vehicle.model" id="vehicle.model" type="text" value="" required>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group required">
                                    <label for="vehicle.year" class="control-label">@lang('form.vehicle.year')</label>
                                    <input class="form-control" name="vehicle.year" id="vehicle.year" type="text" value="" required>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group required">
                                    <label for="vehicle.price" class="control-label">@lang('form.vehicle.price')</label>
                                    <input class="form-control" name="vehicle.price" id="vehicle.price" type="text" value="" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group required">
                                    <label for="phone" class="control-label">@lang('order.Phone')</label>
                                    <input class="form-control" name="phone" id="phone" type="text" value="" required>
                                </div>
                            </div>
                        </div>



                        <a href="#" id="additional-fields" class="read-more">@lang('form.additional')</a>

                        <div class="additional-fields margin-t-10">

                            <fieldset class="dynamic-fields">
                                <legend><h4>@lang('form.vehicle')</h4></legend>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="vehicle.power" class="control-label">@lang('form.vehicle.power')</label>
                                            <input class="form-control" name="vehicle.power" id="vehicle.power" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="dynamic-fields">
                                <legend><h4>@lang('form.driver')</h4></legend>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="driver.gender" class="control-label">@lang('form.driver.gender')</label>
                                            <select class="form-control" name="driver.gender" id="driver.gender">
                                                <option></option>
                                                <option value="@lang('form.driver.gender.male')">@lang('form.driver.gender.male')</option>
                                                <option value="@lang('form.driver.gender.female')">@lang('form.driver.gender.female')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="driver.age" class="control-label">@lang('form.driver.age')</label>
                                            <input class="form-control" name="driver.age" id="driver.age" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="driver.experience" class="control-label">@lang('form.driver.experience')</label>
                                            <input class="form-control" name="driver.experience" id="driver.experience" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form.driver.single')</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="driver.single" class="dynamic-field" value="@lang('general.Yes')"> @lang('general.Yes')
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="dynamic-fields">
                                <legend><h4>@lang('form.vehicle.alt')</h4></legend>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="vehicle.new" class="control-label">@lang('form.vehicle.new')</label>
                                            <select class="form-control" name="vehicle.new" id="vehicle.new">
                                                <option></option>
                                                <option value="@lang('general.Yes')">@lang('general.Yes')</option>
                                                <option value="@lang('general.No')">@lang('general.No')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="vehicle.start" class="control-label">@lang('form.vehicle.start')</label>
                                            <input class="form-control" name="vehicle.start" id="vehicle.start" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="vehicle.warranty" class="control-label">@lang('form.vehicle.warranty')</label>
                                            <select class="form-control" name="vehicle.warranty" id="vehicle.warranty">
                                                <option></option>
                                                <option value="@lang('general.Yes')">@lang('general.Yes')</option>
                                                <option value="@lang('general.No')">@lang('general.No')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="vehicle.wheel" class="control-label">@lang('form.vehicle.wheel')</label>
                                            <select class="form-control" name="vehicle.wheel" id="vehicle.wheel">
                                                <option></option>
                                                <option value="@lang('form.vehicle.wheel.left')">@lang('form.vehicle.wheel.left')</option>
                                                <option value="@lang('form.vehicle.wheel.right')">@lang('form.vehicle.wheel.right')</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="dynamic-fields">
                                <legend><h4>@lang('form.base')</h4></legend>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="base.insurer" class="control-label">@lang('form.base.insurer')</label>
                                            <select class="form-control" name="base.insurer" id="base.insurer">
                                                <option></option>
                                                <option value="@lang('form.base.insurer.f')">@lang('form.base.insurer.f')</option>
                                                <option value="@lang('form.base.insurer.u')">@lang('form.base.insurer.u')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="base.credit" class="control-label">@lang('form.base.credit')</label>
                                            <select class="form-control" name="base.credit" id="base.credit">
                                                <option></option>
                                                <option value="@lang('general.Yes')">@lang('general.Yes')</option>
                                                <option value="@lang('general.No')">@lang('general.No')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="base.bank" class="control-label">@lang('form.base.bank')</label>
                                            <input class="form-control" name="base.bank" id="base.bank" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="base.risk" class="control-label">@lang('form.base.risk')</label>
                                            <select class="form-control" name="base.risk" id="base.risk">
                                                <option></option>
                                                <option value="@lang('form.base.risk.1')">@lang('form.base.risk.1')</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="dynamic-fields">
                                <legend><h4>@lang('form.insurer')</h4></legend>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="insurer.name" class="control-label">@lang('form.insurer.name')</label>
                                            <input class="form-control" name="insurer.name" id="insurer.name" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="insurer.dob" class="control-label">@lang('form.insurer.dob')</label>
                                            <input class="form-control" name="insurer.dob" id="insurer.dob" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="insurer.document" class="control-label">@lang('form.insurer.document')</label>
                                            <input class="form-control" name="insurer.document" id="insurer.document" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="insurer.date" class="control-label">@lang('form.insurer.date')</label>
                                            <input class="form-control" name="insurer.date" id="insurer.date" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="dynamic-fields">
                                <legend><h4>@lang('form.terms')</h4></legend>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="terms.return" class="control-label">@lang('form.terms.return')</label>
                                            <select class="form-control" name="terms.return" id="terms.return">
                                                <option></option>
                                                <option value="@lang('form.terms.return.1')">@lang('form.terms.return.1')</option>
                                                <option value="@lang('form.terms.return.2')">@lang('form.terms.return.2')</option>
                                                <option value="@lang('form.terms.return.3')">@lang('form.terms.return.3')</option>
                                                <option value="@lang('form.terms.return.4')">@lang('form.terms.return.4')</option>
                                                <option value="@lang('form.terms.return.5')">@lang('form.terms.return.5')</option>
                                                <option value="@lang('form.terms.return.6')">@lang('form.terms.return.6')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="terms.payment" class="control-label">@lang('form.terms.payment')</label>
                                            <select class="form-control" name="terms.payment" id="terms.payment">
                                                <option></option>
                                                <option value="@lang('form.terms.payment.1')">@lang('form.terms.payment.1')</option>
                                                <option value="@lang('form.terms.payment.2')">@lang('form.terms.payment.2')</option>
                                                <option value="@lang('form.terms.payment.3')">@lang('form.terms.payment.3')</option>
                                                <option value="@lang('form.terms.payment.4')">@lang('form.terms.payment.4')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="terms.period" class="control-label">@lang('form.terms.period')</label>
                                            <select class="form-control" name="terms.period" id="terms.period">
                                                <option></option>
                                                <option value="@lang('form.terms.period.1')">@lang('form.terms.period.1')</option>
                                                <option value="@lang('form.terms.period.2')">@lang('form.terms.period.2')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="terms.nopaper.body" class="control-label">@lang('form.terms.nopaper.body')</label>
                                            <select class="form-control" name="terms.nopaper.body" id="terms.nopaper.body">
                                                <option></option>
                                                <option value="@lang('form.terms.nopaper.body.1')">@lang('form.terms.nopaper.body.1')</option>
                                                <option value="@lang('form.terms.nopaper.body.2')">@lang('form.terms.nopaper.body.2')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="terms.nopaper.glass" class="control-label">@lang('form.terms.nopaper.glass')</label>
                                            <select class="form-control" name="terms.nopaper.glass" id="terms.nopaper.glass">
                                                <option></option>
                                                <option value="@lang('form.terms.nopaper.glass.1')">@lang('form.terms.nopaper.glass.1')</option>
                                                <option value="@lang('form.terms.nopaper.glass.2')">@lang('form.terms.nopaper.glass.2')</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="dynamic-fields">
                                <legend><h4>@lang('form.add')</h4></legend>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="add.type" class="control-label">@lang('form.add.type')</label>
                                            <select class="form-control" name="add.type" id="add.type">
                                                <option></option>
                                                <option value="@lang('form.add.type.1')">@lang('form.add.type.1')</option>
                                                <option value="@lang('form.add.type.2')">@lang('form.add.type.2')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="add.territory" class="control-label">@lang('form.add.territory')</label>
                                            <select class="form-control" name="add.territory" id="add.territory">
                                                <option></option>
                                                <option value="@lang('form.add.territory.1')">@lang('form.add.territory.1')</option>
                                                <option value="@lang('form.add.territory.2')">@lang('form.add.territory.2')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="add.park" class="control-label">@lang('form.add.park')</label>
                                            <select class="form-control" name="add.park" id="add.park">
                                                <option></option>
                                                <option value="@lang('general.Yes')">@lang('general.Yes')</option>
                                                <option value="@lang('general.No')">@lang('general.No')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="add.storage" class="control-label">@lang('form.add.storage')</label>
                                            <select class="form-control" name="add.storage" id="add.storage">
                                                <option></option>
                                                <option value="@lang('form.add.storage.1')">@lang('form.add.storage.1')</option>
                                                <option value="@lang('form.add.storage.2')">@lang('form.add.storage.2')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="add.transfer" class="control-label">@lang('form.add.transfer')</label>
                                            <select class="form-control" name="add.transfer" id="add.transfer">
                                                <option></option>
                                                <option value="@lang('general.Yes')">@lang('general.Yes')</option>
                                                <option value="@lang('general.No')">@lang('general.No')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="add.gap" class="control-label">@lang('form.add.gap')</label>
                                            <select class="form-control" name="add.gap" id="add.gap">
                                                <option></option>
                                                <option value="@lang('general.Yes')">@lang('general.Yes')</option>
                                                <option value="@lang('general.No')">@lang('general.No')</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="dynamic-fields">
                                <legend><h4>@lang('form.deductible')</h4></legend>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="deductible.amount" class="control-label">@lang('form.deductible.amount')</label>
                                            <select class="form-control" name="deductible.amount" id="deductible.amount">
                                                <option></option>
                                                <option value="@lang('form.deductible.amount.1')">@lang('form.deductible.amount.1')</option>
                                                <option value="@lang('form.deductible.amount.2')">@lang('form.deductible.amount.2')</option>
                                                <option value="@lang('form.deductible.amount.3')">@lang('form.deductible.amount.3')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="deductible.type" class="control-label">@lang('form.deductible.type')</label>
                                            <select class="form-control" name="deductible.type" id="deductible.type">
                                                <option></option>
                                                <option value="@lang('form.deductible.type.1')">@lang('form.deductible.type.1')</option>
                                                <option value="@lang('form.deductible.type.2')">@lang('form.deductible.type.2')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="deductible.dynamic" class="control-label">@lang('form.deductible.dynamic')</label>
                                            <select class="form-control" name="deductible.dynamic" id="deductible.dynamic">
                                                <option></option>
                                                <option value="@lang('general.Yes')">@lang('general.Yes')</option>
                                                <option value="@lang('general.No')">@lang('general.No')</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="dynamic-fields">
                                <legend><h4>@lang('form.antitheft')</h4></legend>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="antitheft.immo" class="control-label">@lang('form.antitheft.immo')</label>
                                            <select class="form-control" name="antitheft.immo" id="antitheft.immo">
                                                <option></option>
                                                <option value="@lang('form.antitheft.immo.1')">@lang('form.antitheft.immo.1')</option>
                                                <option value="@lang('form.antitheft.immo.2')">@lang('form.antitheft.immo.2')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="antitheft.hood" class="control-label">@lang('form.antitheft.hood')</label>
                                            <select class="form-control" name="antitheft.hood" id="antitheft.hood">
                                                <option></option>
                                                <option value="@lang('general.Yes')">@lang('general.Yes')</option>
                                                <option value="@lang('general.No')">@lang('general.No')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="antitheft.transmission" class="control-label">@lang('form.antitheft.transmission')</label>
                                            <select class="form-control" name="antitheft.transmission" id="antitheft.transmission">
                                                <option></option>
                                                <option value="@lang('general.Yes')">@lang('general.Yes')</option>
                                                <option value="@lang('general.No')">@lang('general.No')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="antitheft.wheel" class="control-label">@lang('form.antitheft.wheel')</label>
                                            <select class="form-control" name="antitheft.wheel" id="antitheft.wheel">
                                                <option></option>
                                                <option value="@lang('general.Yes')">@lang('general.Yes')</option>
                                                <option value="@lang('general.No')">@lang('general.No')</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="antitheft.eps" class="control-label">@lang('form.antitheft.eps')</label>
                                            <select class="form-control" name="antitheft.eps" id="antitheft.eps">
                                                <option></option>
                                                <option value="@lang('general.Yes')">@lang('general.Yes')</option>
                                                <option value="@lang('general.No')">@lang('general.No')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="antitheft.sps" class="control-label">@lang('form.antitheft.sps')</label>
                                            <select class="form-control" name="antitheft.sps" id="antitheft.sps">
                                                <option></option>
                                                <option value="@lang('general.Yes')">@lang('general.Yes')</option>
                                                <option value="@lang('general.No')">@lang('general.No')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="antitheft.sps.model" class="control-label">@lang('form.antitheft.sps.model')</label>
                                            <input class="form-control" name="antitheft.sps.model" id="antitheft.sps.model" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name" class="control-label">@lang('order.Name')</label>
                                        <input class="form-control" name="name" id="name" type="text" value="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email" class="control-label">@lang('order.Email')</label>
                                        <input class="form-control" name="email" id="email" type="text" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="comment" class="control-label">@lang('order.Comment')</label>
                                <textarea class="form-control" name="comment" id="comment" rows="10"></textarea>
                            </div>

                        </div>

                        <p>@lang('order.Personal Data')</p>
                        <div class="text-right"><br>
                            <button class="btn btn-primary btn-lg solid blank btn-submit" type="button">@lang('order.Calculate')</button>
                        </div>
                        <input type="hidden" name="fields" id="dynamic-fields" value=""/>



                    </div><!-- Content Col end -->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="sidebar sidebar-right">
                            <div class="widget box solid">
                                <h3 class="widget-title">@lang('form.companies')</h3>
                                <div class="list-group dynamic-fields">
                                    <label class="list-group-item">@lang('form.company.alpha') <input type="checkbox" name="company.alpha" class="dynamic-field pull-right" value="true"></label>
                                    <label class="list-group-item">@lang('form.company.vsk') <input type="checkbox" name="company.vsk" class="dynamic-field pull-right" value="true"></label>
                                    <label class="list-group-item">@lang('form.company.zetta') <input type="checkbox" name="company.zetta" class="dynamic-field pull-right" value="true"></label>
                                    <label class="list-group-item">@lang('form.company.ingos') <input type="checkbox" name="company.ingos" class="dynamic-field pull-right" value="true"></label>
                                    <label class="list-group-item">@lang('form.company.max') <input type="checkbox" name="company.max" class="dynamic-field pull-right" value="true"></label>
                                    <label class="list-group-item">@lang('form.company.reso') <input type="checkbox" name="company.reso" class="dynamic-field pull-right" value="true"></label>
                                    <label class="list-group-item">@lang('form.company.renes') <input type="checkbox" name="company.renes" class="dynamic-field pull-right" value="true"></label>
                                    <label class="list-group-item">@lang('form.company.rosgor') <input type="checkbox" name="company.rosgor" class="dynamic-field pull-right" value="true"></label>
                                    <label class="list-group-item">@lang('form.company.sogas') <input type="checkbox" name="company.sogas" class="dynamic-field pull-right" value="true"></label>
                                    <label class="list-group-item">@lang('form.company.soglas') <input type="checkbox" name="company.soglas" class="dynamic-field pull-right" value="true"></label>
                                    <label class="list-group-item">@lang('form.company.ergo') <input type="checkbox" name="company.ergo" class="dynamic-field pull-right" value="true"></label>
                                    <label class="list-group-item">@lang('form.company.energo') <input type="checkbox" name="company.energo" class="dynamic-field pull-right" value="true"></label>
                                    <label class="list-group-item">@lang('form.company.ugor') <input type="checkbox" name="company.ugor" class="dynamic-field pull-right" value="true"></label>
                                </div>
                            </div><!-- Widget end -->

                            <div class="widget box solid">
                                <div class="testimonial-classic">
                                    <p class="testimonial-classic-text">Только сдала на права, купили машину в кредит в салоне-стали искать где сделать КАСКО - куда не звонили-везде предлагали страховку от 120 тысяч из-за нулевого стажа, а это пятая часть от стоимости машины!!!! Подруга посоветовала этого брокера -позвонила-позитивный менеджер Павел нашёл где сделать КАСКО чисто для банка за 70 тысяч! Спасибо, Павел! Сэкономили месячную зарплату!</p>
                                    <img src="images/testimonial/testimonial1.png" alt="testimonial">
                                    <div class="testimonial-classic-author">
                                        <h3 class="name">Зарема Данилова,</h3>
                                        <h4 class="desg">11.11.2016</h4>
                                    </div>
                                </div>
                            </div><!-- Widget end -->

                        </div><!-- Sidebar end -->
                    </div><!-- Sidebar Col end -->

                </div><!-- Main row end -->
            </form>

        </div><!-- Conatiner end -->
    </section><!-- Main container end -->
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.btn-submit').on('click', function(){
                $('#dynamic-fields').val(JSON.stringify($('.dynamic-fields').find('.form-control, .dynamic-field').serializeArray()));
                $('<input type="submit">').hide().appendTo($('#frm-kasko')).click();
            });
            $('#additional-fields').on('click', function(e){
                e.preventDefault();
                $('.additional-fields').toggle();
                return false;
            });
            $('.additional-fields').hide();

            $(".box-slide").data('owlCarousel').jumpTo(1);
        });
    </script>
@endsection
