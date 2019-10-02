<div class="box box-primary">
    @if($errors->has())
        @foreach ($errors->all() as $error)
            <div class="error">{{ $error }}</div>
        @endforeach
    @endif
    <div class="form-inputs">
        {!! Form::hidden('id') !!}
        <div class="box-body">
            <div class="row">
                <div class="col-sm-3 required-group {{ ($errors->first('name')) ? 'has-error'  :''}}">
                    {!! Form::label('name', trans('order.Name'), array('class'=>'control-label')) !!}
                    {!! Form::text('name', null, array('class' => 'form-control')) !!}
                </div>
                <div class="col-sm-3 {{ ($errors->first('email')) ? 'has-error'  :''}}">
                    {!! Form::label('email', trans('order.Email'), array('class'=>'control-label')) !!}
                    {!! Form::text('email', null, array('class' => 'form-control')) !!}
                </div>
                <div class="col-sm-3 required-group {{ ($errors->first('phone')) ? 'has-error'  :''}}">
                    {!! Form::label('phone', trans('order.Phone'), array('class'=>'control-label')) !!}
                    {!! Form::text('phone', null, array('class' => 'form-control')) !!}
                </div>
                <div class="col-sm-3 {{ ($errors->first('delivery')) ? 'has-error'  :''}}">
                    <label class="control-label">&nbsp;</label>
                    <div class="form-control no-border">
                        <label for="delivery">
                            {!! Form::hidden('delivery',0) !!}
                            {!! Form::checkbox('delivery', 1, null, ['id'=>'delivery']) !!} {{trans('order.Delivery')}}
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 {{ ($errors->first('comment')) ? 'has-error'  :''}}">
                    {!! Form::label('comment', trans('order.Comment'), array('class'=>'control-label')) !!}
                    {!! Form::textarea('comment', null, array('class' => 'form-control','rows' => '0')) !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 {{ ($errors->first('type_id')) ? 'has-error'  :''}}">
                    {!! Form::label('type_id', trans('order.Type'), array('class'=>'control-label')) !!}
                    {!! Form::select('type_id', \App\OrderType::pluck('name','id'), $order->type_id, array('class' => 'select2 form-control')) !!}
                </div>
                <div class="col-md-6 {{ ($errors->first('status_id')) ? 'has-error'  :''}}">
                    {!! Form::label('status_id', trans('order.Status'), array('class'=>'control-label')) !!}
                    {!! Form::select('status_id', \App\OrderStatus::pluck('name','id'), $order->status_id, array('class' => 'select2 form-control')) !!}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 {{ ($errors->first('notes')) ? 'has-error'  :''}}">
                    {!! Form::label('notes', trans('order.Notes'), array('class'=>'control-label')) !!}
                    {!! Form::textarea('notes', null, array('class' => 'form-control','rows' => '0')) !!}
                </div>
            </div>

            <h3>@lang('order.Details')</h3>

            @if($order->isOsago())
                @if ($order->fields)
                    <div class="row bg-gray-light order-details">
                        <div class="col-md-12">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">Фотографии</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked order_photos">
                                        @foreach(json_decode($order->fields) as $key => $field)
                                            @if ($key == 'photos')

                                                @foreach($field as $photo)
                                                    <li>
                                                        <a href="{{asset('photos/'.$photo)}}" class="lsb-preview" data-lsb-group="header" >
                                                            <img src="{{asset('photos/'.$photo)}}" alt="order photo">
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bg-gray-light order-details">
                        <div class="col-md-12">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">Файл PDF</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked order_photos">
                                        @foreach(json_decode($order->fields) as $key => $field)
                                            @if ($key == 'file')

                                                @foreach($field as $photo)
                                                    <li>
                                                        <a href="{{asset('uploads/pdf/'.$photo)}}"
                                                           style="color: blue;text-decoration: underline" download>
                                                            {{$photo}}
                                                            {{--                                                                <img src="{{asset('uploads/pdf/'.$photo)}}" alt="pdf file">--}}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bg-gray-light order-details">
                        <div class="col-md-6">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.osago.general')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">

                                        @foreach(json_decode($order->fields) as $field)
                                            @if (gettype($field) == "object")
                                                @if($field->name)
                                                    @if(!str_contains($field->name, 'group_ur') && !str_contains($field->name, 'hp_ur') && !str_contains($field->name, 'name') && !str_contains($field->name, 'dob') && !str_contains($field->name, 'licenseSerial') && !str_contains($field->name, 'licenseNumber') && !str_contains($field->name, 'age') && !str_contains($field->name, 'staj') && !str_contains($field->name, 'kbm') && !str_contains($field->name, 'region') && !str_contains($field->name, 'city') && !str_contains($field->name, 'price'))
                                                        <li><a>@lang('form.osago.'.$field->name) <span
                                                                        class="pull-right badge">@lang('form.osago.'.$field->name.'.'.$field->value)</span></a>
                                                        </li>
                                                    @endif
                                                    @if(str_contains($field->name, 'price'))
                                                        <li><a>@lang('form.osago.'.$field->name) <span
                                                                        class="pull-right badge">{{$field->value}}</span></a>
                                                        </li>
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.osago.additional')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">

                                        @foreach(json_decode($order->fields) as $key => $field)
                                            @if (gettype($field) == "object")

                                                @if ($field->name)
                                                    @if(str_is($field->name, 'region_TC'))
                                                        <li><a>@lang('form.osago.'.$field->name) <span
                                                                        class="pull-right badge">@lang('form.osago.'.$field->name.'.'.$field->value)</span></a>
                                                        </li>
                                                    @endif
                                                    @if(str_is($field->name, 'region') || str_is($field->name, 'city'))
                                                        @php($region_id = $field->value)
                                                        <li><a>@lang('form.osago.'.$field->name) <span
                                                                        class="pull-right badge">{{ $field->value }}</span></a>
                                                        </li>
                                                    @endif

                                                @endif

                                            @endif

                                            @if($key && $key == 'city')
                                                <li><a> Город: <span class="pull-right badge">{{ $field }}</span></a>
                                                </li>
                                            @endif

                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endif

            @if($order->isKasko())
                @if ($order->fields)
                    <div class="row bg-gray-light order-details">
                        <div class="col-md-12">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">Фото</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked order_photos">
                                        @foreach(json_decode($order->fields) as $key => $field)
                                            @if ($key == 'photos')
                                                @foreach($field as $photo)
                                                    <li>
                                                        <a href="{{asset('photos/'.$photo)}}" class="lsb-preview" data-lsb-group="header">
                                                            <img src="{{asset('photos/'.$photo)}}" alt="order photo">
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bg-gray-light order-details">
                        <div class="col-md-4">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.vehicle')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as  $key => $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'vehicle.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">{{$field->value}}</span></a>
                                                    </li>

                                                @endif

                                            @endif
                                            @if($key && $key == 'city')
                                                <li><a> Город: <span class="pull-right badge">{{ $field }}</span></a>
                                                </li>
                                            @endif
                                            @if($key && $key == 'mark')
                                                <li><a> Марка: <span class="pull-right badge">{{ $field }}</span></a>
                                                </li>
                                            @endif
                                            @if($key && $key == 'model')
                                                <li><a> Модель: <span class="pull-right badge">{{ $field }}</span></a>
                                                </li>
                                            @endif
                                            @if($key && $key == 'power')
                                                <li><a> Мощность л.с.: <span
                                                                class="pull-right badge">{{ $field }}</span></a>
                                                </li>
                                            @endif
                                            @if($key && $key == 'cost')
                                                <li><a> Цена: <span class="pull-right badge">{{ $field }}</span></a>
                                                </li>
                                            @endif
                                            @if($key && $key == 'credit')
                                                <li><a> В кредит? : <span
                                                                class="pull-right badge">{{ $field }}</span></a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.driver')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as $key => $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'driver.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">{{$field->value}}</span></a>
                                                    </li>
                                                @endif
                                            @endif
                                            @if($key && $key == 'young_driver_age')
                                                <li><a> Возраст младшего вод.: <span
                                                                class="pull-right badge">{{ $field }}</span></a>
                                                </li>
                                            @endif
                                            @if($key && $key == 'young_driver_staj')
                                                <li><a> Стаж младшего вод.: <span
                                                                class="pull-right badge">{{ $field }}</span></a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.base')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as $key => $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'base.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">{{$field->value}}</span></a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.insurer')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as $key => $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'insurer.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">{{$field->value}}</span></a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bg-gray-light order-details">

                        <div class="col-md-7">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.terms')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as $key => $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'terms.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">{{$field->value}}</span></a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                        <li><a>&nbsp;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.add')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as $key => $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'add.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">{{$field->value}}</span></a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bg-gray-light order-details">
                        <div class="col-md-4">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.deductible')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'deductible.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">{{$field->value}}</span></a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.antitheft')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'antitheft.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">{{$field->value}}</span></a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.companies')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'company.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">@lang('form.'.$field->value)</span></a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                @endif

            @endif

            @if($order->isTravel())
                @if ($order->fields)
                    <div class="row bg-gray-light order-details">
                        <div class="col-md-12">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">Файл PDF</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked order_photos">
                                        @foreach(json_decode($order->fields) as $key => $field)
                                            @if ($key == 'file')

                                                @foreach($field as $photo)
                                                    <li>
                                                        <a href="{{asset('uploads/pdf/'.$photo)}}"
                                                           style="color: blue;text-decoration: underline" download>
                                                            {{$photo}}
                                                            {{--                                                                <img src="{{asset('uploads/pdf/'.$photo)}}" alt="pdf file">--}}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bg-gray-light order-details">
                        <div class="col-md-4">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.vehicle')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as  $key => $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'vehicle.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">{{$field->value}}</span></a>
                                                    </li>

                                                @endif

                                            @endif

                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.driver')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as $key => $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'driver.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">{{$field->value}}</span></a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.base')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as $key => $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'base.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">{{$field->value}}</span></a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.insurer')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as $key => $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'insurer.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">{{$field->value}}</span></a>
                                                    </li>
                                                @endif
                                            @endif
                                            @if($key && $key == 'country')
                                                <li><a> Страна: <span class="pull-right badge">{{ $field }}</span></a>
                                                </li>
                                            @endif
                                            @if($key && $key == 'person_count')
                                                <li><a> Кол. человек: <span class="pull-right badge">{{ $field }}</span></a>
                                                </li>
                                            @endif
                                            @if($key && $key == 'dates')
                                                <li><a> Промежуток: <span
                                                                class="pull-right badge">{{ $field }}</span></a>
                                                </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bg-gray-light order-details">

                        <div class="col-md-7">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.terms')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as $key => $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'terms.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">{{$field->value}}</span></a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                        <li><a>&nbsp;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.add')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as $key => $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'add.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">{{$field->value}}</span></a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bg-gray-light order-details">
                        <div class="col-md-4">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.deductible')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'deductible.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">{{$field->value}}</span></a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.antitheft')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'antitheft.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">{{$field->value}}</span></a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.companies')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'company.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">@lang('form.'.$field->value)</span></a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            @endif
            @if($order->isEstate())
                @if ($order->fields)

                    <div class="row bg-gray-light order-details">

                        <div class="col-md-12">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-light-blue">
                                    <h3 class="widget-order-title">@lang('form.estate')</h3>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach(json_decode($order->fields) as $key => $field)
                                            @if (gettype($field) == "object")
                                                @if(str_contains($field->name, 'terms.'))
                                                    <li><a>@lang('form.'.$field->name) <span
                                                                    class="pull-right badge">{{$field->value}}</span></a>
                                                    </li>
                                                @endif
                                            @endif
                                            @if($key && $key == 'person_name')
                                                <li><a> Имя: <span class="pull-right badge">{{ $field }}</span></a>
                                                </li>
                                            @endif
                                            @if($key && $key == 'estate_name')
                                                <li><a> Имущество: <span
                                                                class="pull-right badge">{{ $field }}</span></a>
                                                </li>
                                            @endif
                                        @endforeach
                                        <li><a>&nbsp;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                @endif

            @endif
        </div>
        <div id="editor"></div>
        <div class="box-footer">
            <div class="form-group">
                <div class='col-sm-offset-3 col-sm-9'>
                    <button name="submit" type="submit" class="btn btn-lg btn-success">
                        <i class="fa fa-floppy-o fa-fw"></i> {{trans('general.Save')}}
                    </button>
                    <a class="btn btn-lg btn-default"
                       href="{{ action('OrdersController@index') }}">{{trans('general.Cancel')}}</a>
                    <a class="btn btn-lg btn-default"
                       href="{{ route('pdf.download',$order->id) }}"><i class="fa fa-lg fa-print"></i>Экспортировать</a>
                </div>
            </div>
        </div>
    </div>
</div>
