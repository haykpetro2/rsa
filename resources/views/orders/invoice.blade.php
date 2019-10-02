<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    body {
        font-family: DejaVu Sans;
    }

    table {
        text-align: center;
        width: 100%;

    }

    td {
        border: 1px solid;
    }

    ul {
        list-style: none;
    }

    .order_photos {
        display: block;
        position: relative;
        width: 100%;
        padding: 0;

    }

    .order_photos li {
        page-break-after: always;
        position: relative;
        width: 80%;
        display: block;
        /*float: left;*/
        /*margin-right: 10px;*/

    }

    .order_photos li img {
        width: 100% !important;
        height: auto;
    }
</style>
<h1>Детали заказа</h1>

<table>
    <thead>
    <tr>
        <th>Имя</th>
        <th>Email</th>
        <th>Телефон</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $order->name }}</td>
        <td>{{ $order->email }}</td>
        <td>{{ $order->phone }}</td>
    </tr>
    </tbody>
</table>

@if($order->isOsago())
    @if ($order->fields)

        <ul class="order_photos">
            @foreach(json_decode($order->fields) as $key => $field)
                @if ($key == 'photos')

                    @foreach($field as $photo)

                        <li><img src="{{public_path('photos/'.$photo)}}" alt="order photo"></li>
                    @endforeach
                @endif

            @endforeach
        </ul>
        <ul>
            @foreach(json_decode($order->fields) as $key => $field)
                @if (gettype($field) == "object")
                    @if($field->name)
                        @if(!str_contains($field->name, 'group_ur') && !str_contains($field->name, 'hp_ur') && !str_contains($field->name, 'name') && !str_contains($field->name, 'dob') && !str_contains($field->name, 'licenseSerial') && !str_contains($field->name, 'licenseNumber') && !str_contains($field->name, 'age') && !str_contains($field->name, 'staj') && !str_contains($field->name, 'kbm') && !str_contains($field->name, 'region') && !str_contains($field->name, 'city') && !str_contains($field->name, 'price'))
                            <li>@lang('form.osago.'.$field->name) <span
                                        class="pull-right badge">@lang('form.osago.'.$field->name.'.'.$field->value)</span>
                            </li>
                        @endif
                        @if(str_contains($field->name, 'price'))
                            <li>@lang('form.osago.'.$field->name) <span
                                        class="pull-right badge">{{$field->value}}</span>
                            </li>
                        @endif
                    @endif
                @endif
            @endforeach
        </ul>
        <ul>

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
    @endif
@endif

@if($order->isKasko())
    @if ($order->fields)
        <ul class="order_photos">
            @foreach(json_decode($order->fields) as $key => $field)
                @if ($key == 'photos')
                    @foreach($field as $photo)
                        <li>
                            <img src="{{public_path('photos/'.$photo)}}" alt="order photo">
                        </li>
                    @endforeach
                @endif
            @endforeach
        </ul>
        <ul>
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
                    <li><a> Мощность л.с.: <span class="pull-right badge">{{ $field }}</span></a>
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
        <ul>
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
        <ul>
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
        <ul>
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
        <ul>
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
        <ul>
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
        <ul>
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
        <ul>
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
        <ul>
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
    @endif
@endif
@if($order->isTravel())
    @if ($order->fields)
        <ul>
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
        <ul>
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
        <ul>
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
        <ul>
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
                    <li><a> Промежуток: <span class="pull-right badge">{{ $field }}</span></a>
                    </li>
                @endif
            @endforeach

        </ul>
        <ul>
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
        <ul>
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
        <ul>
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
        <ul>
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
        <ul>
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
    @endif
@endif
