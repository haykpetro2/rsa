<form id="frm-calc" method="post" role="form">
    <div class="dynamic-fields">
        <div class="row">
            <div class="form-group col-xs-12">
                <label>@lang('form.osago.owner')</label><br/>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default active">
                        <input type="radio" name="owner" value="fiz" checked='checked' class="dynamic-field"> @lang('form.osago.owner.fiz')
                    </label>
                    <label class="btn btn-default">
                        <input type="radio" name="owner" value="ur" class="dynamic-field"> @lang('form.osago.owner.ur')
                    </label>
                </div>
            </div>
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
        </div>

        <div class="row region_tc">
            <div class="col-xs-12">
                <label for="region">@lang('form.osago.registration')</label>
            </div>
            <div class="form-group col-xs-6">
                <select name='region' id='region' class="form-control"></select>
            </div>
            <div class="form-group col-xs-6">
                <select name='city' id='city' class="form-control">
                    <option value='1l'>---</option>
                </select>
            </div>
        </div>

        <div class="row fiz_field">
            <div class="form-group col-xs-6">
                <label for="group_fiz">@lang('form.osago.group_fiz')</label>
                <select name='group_fiz' id='group_fiz' class="form-control">
                    <option value='1'>Мотоциклы и мотороллеры</option>
                    <option value='2'>Легковые автомобили</option>
                    <option value='3'>Легковые автомобили - такси</option>
                    <option value='4'>Грузовые ТС до 16 тонн</option>
                    <option value='5'>Грузовые ТС свыше 16 тонн</option>
                    <option value='6'>Автобусы до 20 мест</option>
                    <option value='7'>Автобусы свыше 20 мест</option>
                    <option value='8'>Троллейбусы</option>
                    <option value='9'>Трамваи</option>
                    <option value='10'>Тракторы и иные машины</option>
                    <option value='11'>Автобусы - такси</option>
                </select>
            </div>
            <div class="form-group col-xs-6 only_leg">
                <label for="hp_fiz">@lang('form.osago.hp_fiz')</label>
                <select name='hp_fiz' id='hp_fiz' class="form-control">
                    <option value='0.7'>До 50 л. с.</option>
                    <option value='1'>51-70 л. с.</option>
                    <option value='1.1'>71-100 л. с.</option>
                    <option value='1.2' selected>101-120 л. с.</option>
                    <option value='1.4'>121-150 л. с.</option>
                    <option value='1.6'>151 л. с. и более</option>
                </select>
            </div>
        </div>

        <div class="row ur_field">
            <div class="form-group col-xs-6">
                <label for="group_ur">@lang('form.osago.group_ur')</label>
                <select name='group_ur' id='group_ur' class="form-control">
                    <option value='1'>Мотоциклы и мотороллеры</option>
                    <option value='2'>Легковые автомобили</option>
                    <option value='3'>Легковые автомобили - такси</option>
                    <option value='4'>Грузовые ТС до 16 тонн</option>
                    <option value='5'>Грузовые ТС свыше 16 тонн</option>
                    <option value='6'>Автобусы до 16 мест</option>
                    <option value='7'>Автобусы свыше 16 мест</option>
                    <option value='8'>Троллейбусы</option>
                    <option value='9'>Трамваи</option>
                    <option value='10'>Тракторы и иные машины</option>
                    <option value='11'>Автобусы - такси</option>
                </select>
            </div>
            <div class="form-group col-xs-6 only_leg_ur">
                <label for="hp_ur">@lang('form.osago.hp_ur')</label>
                <select name='hp_ur' id='hp_ur' class="form-control">
                    <option value='0.7'>До 50 л. с.</option>
                    <option value='1'>51-70 л. с.</option>
                    <option value='1.1'>71-100 л. с.</option>
                    <option value='1.2' selected>101-120 л. с.</option>
                    <option value='1.4'>121-150 л. с.</option>
                    <option value='1.6'>151 л. с. и более</option>
                </select>
            </div>
        </div>

        <input type="hidden" name="gibdd" value="1"/>
        <input type="hidden" name="period" value="1"/>
        <input type="hidden" name="srok" value="1"/>
        {{--<div class="row ">
            <div class="form-group col-xs-6 only_rf">
                <label>@lang('form.osago.gibdd')</label>
                <div class="input-group">
                    <label class="btn">
                        <input type="radio" name="gibdd" value="1" checked class="dynamic-field"> @lang('form.osago.gibdd.1')
                    </label>
                    <label class="btn">
                        <input type="radio" name="gibdd" value="0" class="dynamic-field"> @lang('form.osago.gibdd.0')
                    </label>
                </div>
            </div>
            <div class="form-group col-xs-6 period_field only_rf">
                <label for="period">@lang('form.osago.period')</label>
                <select name='period' id='period' class="form-control">
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
            <div class="form-group col-xs-6 foreign_field" style='display:none'>
                <label for="srok">@lang('form.osago.srok')</label>
                <select name='srok' id='srok' class="form-control">
                    <option value='1'>1 год</option>
                    <option value='0.95'>9 месяцев</option>
                    <option value='0.9'>8 месяцев</option>
                    <option value='0.8'>7 месяцев</option>
                    <option value='0.7'>6 месяцев</option>
                    <option value='0.65'>5 месяцев</option>
                    <option value='0.6'>4 месяца</option>
                    <option value='0.5'>3 месяца</option>
                    <option value='0.4'>2 месяца</option>
                    <option value='0.3'>1 месяц</option>
                    <option value='0.2'>15 дней</option>
                </select>
            </div>
        </div>--}}

        <div class="row">
            <div class="form-group col-sm-6 drivers_field">
                <label for="drivers_list" style="display: block;">@lang('form.osago.drivers_list')</label>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default">
                        <input type="radio" name="drivers_list" value="ogr" class="dynamic-field"> @lang('form.osago.drivers_list.ogr')
                    </label>
                    <label class="btn btn-default active">
                        <input type="radio" name="drivers_list" value="neogr" checked='checked' class="dynamic-field"> @lang('form.osago.drivers_list.neogr')
                    </label>
                </div>
            </div>
            <div class="form-group col-sm-6 limit_drivers_field" style='display:none;' id='limit_drivers_button'>
                <label for="drivers" style="display: block;">@lang('form.osago.drivers')</label>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default">
                        <input type="radio" name="drivers" value="1" checked='checked' class="dr dynamic-field"> 1
                    </label>
                    <label class="btn btn-default active">
                        <input type="radio" name="drivers" value='2' class="dynamic-field"> 2
                    </label>
                    <label class="btn btn-default">
                        <input type="radio" name="drivers" value='3' class="dynamic-field"> 3
                    </label>
                    <label class="btn btn-default">
                        <input type="radio" name="drivers" value='4' class="dynamic-field"> 4
                    </label>
                    <label class="btn btn-default">
                        <input type="radio" name="drivers" value='5' class="dynamic-field"> 5
                    </label>
                </div>
            </div>
        </div>

        <div class='all_drivers fiz_field' style='display:none;'>
            <fieldset>
                <legend>Водители</legend>

                <div class="row driver1" style="display:none;">
                    <div class="form-group form-sm col-md-4">
                        <input type="text" name="name1" id="name1" value="" class="form-control input-sm dynamic-field" placeholder="@lang('form.osago.name1')">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" name="dob1" value="" class="bd form-control input-sm dynamic-field" placeholder="@lang('form.osago.dob1')">
                        <input type="hidden" name="age1" value="" class="age">
                    </div>
                    <div class="form-group col-md-1">
                        <input type="text" name="licenseSerial1" value="" class="form-control input-sm dynamic-field" placeholder="@lang('form.osago.licenseSerial1')">
                    </div>
                    <div class="form-group col-md-1">
                        <input type="text" name="licenseNumber1" value="" class="form-control input-sm dynamic-field" placeholder="@lang('form.osago.licenseNumber1')">
                    </div>
                    <div class="form-group col-md-2">
                        <label style="padding: 5px 8px;">@lang('form.osago.staj1')</label>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default btn-sm" style="padding: 5px 8px;">
                                <input type="radio" name="staj1" value="2" class="dynamic-field"> 0-2
                            </label>
                            <label class="btn btn-default btn-sm" style="padding: 5px 8px;">
                                <input type="radio" name="staj1" value="100" class="dynamic-field"> 3+
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <div class="input-group input-group-sm">
                            <select name='kbm1' id='kbm1' title="KBM1" class="form-control" style="min-width: 70px;">
                                <option value='1'>1</option>
                                <option value='0.95'>0,95</option>
                                <option value='0.9'>0,9</option>
                                <option value='0.85'>0,85</option>
                                <option value='0.8'>0,8</option>
                                <option value='0.75'>0,75</option>
                                <option value='0.7'>0,7</option>
                                <option value='0.65'>0,65</option>
                                <option value='0.6'>0,6</option>
                                <option value='0.55'>0,55</option>
                                <option value='0.5'>0,5</option>
                            </select>
                            <span class="input-group-btn">
                                    <button type="button" data-id="1" data-loading-text="@lang('general.Processing...')" class="btn btn-success btn-kbm"> Проверить скидку</button>
                                </span>
                        </div>
                        <div class="kbm-result1"></div>
                    </div>
                </div>

                <div class="row driver2" style="display:none;">
                    <div class="form-group form-sm col-md-4">
                        <input type="text" name="name2" id="name2" value="" class="form-control input-sm dynamic-field" placeholder="@lang('form.osago.name1')">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" name="dob2" value="" class="bd form-control input-sm dynamic-field" placeholder="@lang('form.osago.dob1')">
                        <input type="hidden" name="age2" value="" class="age">
                    </div>
                    <div class="form-group col-md-1">
                        <input type="text" name="licenseSerial2" value="" class="form-control input-sm dynamic-field" placeholder="@lang('form.osago.licenseSerial1')">
                    </div>
                    <div class="form-group col-md-1">
                        <input type="text" name="licenseNumber2" value="" class="form-control input-sm dynamic-field" placeholder="@lang('form.osago.licenseNumber1')">
                    </div>
                    <div class="form-group col-md-2">
                        <label style="padding: 5px 8px;">@lang('form.osago.staj1')</label>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default btn-sm" style="padding: 5px 8px;">
                                <input type="radio" name="staj2" value="2" class="dynamic-field"> 0-2
                            </label>
                            <label class="btn btn-default btn-sm" style="padding: 5px 8px;">
                                <input type="radio" name="staj2" value="100" class="dynamic-field"> 3+
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <div class="input-group input-group-sm">
                            <select name='kbm2' id='kbm2' title="KBM2" class="form-control" style="min-width: 70px;">
                                <option value='1'>1</option>
                                <option value='0.95'>0,95</option>
                                <option value='0.9'>0,9</option>
                                <option value='0.85'>0,85</option>
                                <option value='0.8'>0,8</option>
                                <option value='0.75'>0,75</option>
                                <option value='0.7'>0,7</option>
                                <option value='0.65'>0,65</option>
                                <option value='0.6'>0,6</option>
                                <option value='0.55'>0,55</option>
                                <option value='0.5'>0,5</option>
                            </select>
                            <span class="input-group-btn">
                                <button type="button" data-id="2" data-loading-text="@lang('general.Processing...')" class="btn btn-success btn-kbm"> Проверить скидку</button>
                            </span>
                        </div>
                        <div class="kbm-result2"></div>
                    </div>
                </div>

                <div class="row driver3" style="display:none;">
                    <div class="form-group form-sm col-md-4">
                        <input type="text" name="name3" id="name3" value="" class="form-control input-sm dynamic-field" placeholder="@lang('form.osago.name1')">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" name="dob3" value="" class="bd form-control input-sm dynamic-field" placeholder="@lang('form.osago.dob1')">
                        <input type="hidden" name="age3" value="" class="age">
                    </div>
                    <div class="form-group col-md-1">
                        <input type="text" name="licenseSerial3" value="" class="form-control input-sm dynamic-field" placeholder="@lang('form.osago.licenseSerial1')">
                    </div>
                    <div class="form-group col-md-1">
                        <input type="text" name="licenseNumber3" value="" class="form-control input-sm dynamic-field" placeholder="@lang('form.osago.licenseNumber1')">
                    </div>
                    <div class="form-group col-md-2">
                        <label style="padding: 5px 8px;">@lang('form.osago.staj1')</label>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default btn-sm" style="padding: 5px 8px;">
                                <input type="radio" name="staj3" value="2" class="dynamic-field"> 0-2
                            </label>
                            <label class="btn btn-default btn-sm" style="padding: 5px 8px;">
                                <input type="radio" name="staj3" value="100" class="dynamic-field"> 3+
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <div class="input-group input-group-sm">
                            <select name='kbm3' id='kbm3' title="KBM3" class="form-control" style="min-width: 70px;">
                                <option value='1'>1</option>
                                <option value='0.95'>0,95</option>
                                <option value='0.9'>0,9</option>
                                <option value='0.85'>0,85</option>
                                <option value='0.8'>0,8</option>
                                <option value='0.75'>0,75</option>
                                <option value='0.7'>0,7</option>
                                <option value='0.65'>0,65</option>
                                <option value='0.6'>0,6</option>
                                <option value='0.55'>0,55</option>
                                <option value='0.5'>0,5</option>
                            </select>
                            <span class="input-group-btn">
                                    <button type="button" data-id="3" data-loading-text="@lang('general.Processing...')" class="btn btn-success btn-kbm"> Проверить скидку</button>
                                </span>
                        </div>
                        <div class="kbm-result3"></div>
                    </div>
                </div>

                <div class="row driver4" style="display:none;">
                    <div class="form-group form-sm col-md-4">
                        <input type="text" name="name4" id="name4" value="" class="form-control input-sm dynamic-field" placeholder="@lang('form.osago.name1')">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" name="dob4" value="" class="bd form-control input-sm dynamic-field" placeholder="@lang('form.osago.dob1')">
                        <input type="hidden" name="age4" value="" class="age">
                    </div>
                    <div class="form-group col-md-1">
                        <input type="text" name="licenseSerial4" value="" class="form-control input-sm dynamic-field" placeholder="@lang('form.osago.licenseSerial1')">
                    </div>
                    <div class="form-group col-md-1">
                        <input type="text" name="licenseNumber4" value="" class="form-control input-sm dynamic-field" placeholder="@lang('form.osago.licenseNumber1')">
                    </div>
                    <div class="form-group col-md-2">
                        <label style="padding: 5px 8px;">@lang('form.osago.staj1')</label>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default btn-sm" style="padding: 5px 8px;">
                                <input type="radio" name="staj4" value="2" class="dynamic-field"> 0-2
                            </label>
                            <label class="btn btn-default btn-sm" style="padding: 5px 8px;">
                                <input type="radio" name="staj4" value="100" class="dynamic-field"> 3+
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <div class="input-group input-group-sm">
                            <select name='kbm4' id='kbm4' title="KBM4" class="form-control" style="min-width: 70px;">
                                <option value='1'>1</option>
                                <option value='0.95'>0,95</option>
                                <option value='0.9'>0,9</option>
                                <option value='0.85'>0,85</option>
                                <option value='0.8'>0,8</option>
                                <option value='0.75'>0,75</option>
                                <option value='0.7'>0,7</option>
                                <option value='0.65'>0,65</option>
                                <option value='0.6'>0,6</option>
                                <option value='0.55'>0,55</option>
                                <option value='0.5'>0,5</option>
                            </select>
                            <span class="input-group-btn">
                                    <button type="button" data-id="4" data-loading-text="@lang('general.Processing...')" class="btn btn-success btn-kbm"> Проверить скидку</button>
                                </span>
                        </div>
                        <div class="kbm-result4"></div>
                    </div>
                </div>

                <div class="row driver5" style="display:none;">
                    <div class="form-group form-sm col-md-4">
                        <input type="text" name="name5" id="name5" value="" class="form-control input-sm dynamic-field" placeholder="@lang('form.osago.name1')">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" name="dob5" value="" class="bd form-control input-sm dynamic-field" placeholder="@lang('form.osago.dob1')">
                        <input type="hidden" name="age5" value="" class="age">
                    </div>
                    <div class="form-group col-md-1">
                        <input type="text" name="licenseSerial5" value="" class="form-control input-sm dynamic-field" placeholder="@lang('form.osago.licenseSerial1')">
                    </div>
                    <div class="form-group col-md-1">
                        <input type="text" name="licenseNumber5" value="" class="form-control input-sm dynamic-field" placeholder="@lang('form.osago.licenseNumber1')">
                    </div>
                    <div class="form-group col-md-2">
                        <label style="padding: 5px 8px;">@lang('form.osago.staj1')</label>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default btn-sm" style="padding: 5px 8px;">
                                <input type="radio" name="staj5" value="2" class="dynamic-field"> 0-2
                            </label>
                            <label class="btn btn-default btn-sm" style="padding: 5px 8px;">
                                <input type="radio" name="staj5" value="100" class="dynamic-field"> 3+
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <div class="input-group input-group-sm">
                            <select name='kbm5' id='kbm5' title="KBM5" class="form-control" style="min-width: 70px;">
                                <option value='1'>1</option>
                                <option value='0.95'>0,95</option>
                                <option value='0.9'>0,9</option>
                                <option value='0.85'>0,85</option>
                                <option value='0.8'>0,8</option>
                                <option value='0.75'>0,75</option>
                                <option value='0.7'>0,7</option>
                                <option value='0.65'>0,65</option>
                                <option value='0.6'>0,6</option>
                                <option value='0.55'>0,55</option>
                                <option value='0.5'>0,5</option>
                            </select>
                            <span class="input-group-btn">
                                    <button type="button" data-id="5" data-loading-text="@lang('general.Processing...')" class="btn btn-success btn-kbm"> Проверить скидку</button>
                                </span>
                        </div>
                        <div class="kbm-result5"></div>
                    </div>
                </div>
            </fieldset>
        </div>
        <input type="hidden" name="price" id="order_price" class="dynamic-field" value="0.0"/>
        <div class="text-danger" id='error' style='display:none;'></div>
        <div class="text-danger" id='activation_info' style='display:none;'></div>
    </div>

    <input type='hidden' name='domain' value='halk-insurance.ru'>
</form>

<form action="{{action('OrdersController@postOsago')}}" id="frm-osago" method="post" role="form">
    <fieldset>
        <legend></legend>
        <div class="row">
            <div class="col-xs-6">
                <div class="form-group required">
                    <label for="phone" class="control-label">@lang('order.Phone')</label>
                    <input class="form-control input-sm phone" name="phone" id="phone" type="text" value="" required>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="deliver" class="control-label" style="display: block;">@lang('order.Delivery')</label>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-default btn-sm">
                            <input type="radio" name="deliver" value="1"> @lang('general.Yes')
                        </label>
                        <label class="btn btn-default btn-sm active">
                            <input type="radio" name="deliver" value='0' checked='checked'> @lang('general.No')
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <input type="hidden" name="name" id="name"/>

        <input type="hidden" name="fields" id="dynamic-fields" value=""/>
        {{csrf_field()}}
    </fieldset>
</form>

<div class="text-right">
    <a href="/" class="btn btn-link">Очистить</a>
    <button id="btn-calc" type="button" data-loading-text="@lang('general.Processing...')" class="btn btn-primary btn-lg solid blank btn-calc">@lang('order.Calculate')</button>
</div>

<div class="modal fade" id="result-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="top: 10%;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Расчет ОСАГО</h4>
            </div>
            <div class="modal-body">
                <h4>Стоимость полиса ОСАГО: <b><span class="label label-success" id='osago_price' style="font-size: 18px;"></span></b> руб.</h4>
                <table class="hidden-xs table table-responsive table-condensed table-bordered table-striped">
                    <tr>
                        <td>Базовый тариф</td>
                        <td>КТ (терр.)</td>
                        <td>КБМ (бонус-малус)</td>
                        <td>КВС (возраст-стаж)</td>
                        <td>КП (период использования)</td>
                        <td>КС (срок страхования)</td>
                        <td>КМ (мощность)</td>
                    </tr>
                    <tr>
                        <td><label id='BT'></label></td>
                        <td><label id='kreg'></label></td>
                        <td><label id='kbm'></label></td>
                        <td><label id='kbc'></label></td>
                        <td><label id='kperiod'></label></td>
                        <td><label id='ksrok'></label></td>
                        <td><label id='khp'></label></td>
                    </tr>
                </table>
                <div class="text-center">
                    <a href="/success" class="btn btn-primary btn-lg solid blank">@lang('order.Order Now')</a>
                </div>
            </div>
        </div>
    </div>
</div>