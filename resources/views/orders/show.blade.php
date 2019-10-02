@extends('layouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('orders') }}">Orders</a></li>
            <li>Show</li>
        </ol>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h4>Order Details</h4>
            </div>
            <div class="panel-body">
                @include('flash::message')
                <div class="row">
                    <div class="col-xs-12">
                        <p><b>Name</b>: {{ $order->name }}</p>
                        <p><b>Email</b>: {{ $order->email }}</p>
                        <p><b>Phone</b>: {{ $order->phone }}</p>
                        <p><b>Comment</b>: {{ $order->comment }}</p>
                        {{--                        <p><b>Status</b>: {{ $order->status }}</p>--}}
                        {{--                        <p><b>Type</b>: {{ $order->type }}</p>--}}
                        {{--@if($order->isTravel())
                            @if ($order->fields)

                            @endif
                        @endif--}}
                        {{--@if($order->isKasko())--}}
                            @if ($order->fields)
                        @foreach(json_decode($order->fields) as $key => $field)

                            @if($key && $key == 'person_name')
                                <p><b>Имя</b>: {{ $field }}</p>
                            @endif
                            @if($key && $key == 'estate_name')
                                <p><b>Имущество</b>: {{ $field }}</p>
                            @endif

                            @if ($key == 'photos')
                                @foreach($field as $photo)

                                    <a href="{{asset('photos/'.$photo)}}" class="lsb-preview" data-lsb-group="header">
                                        <img src="{{asset('photos/'.$photo)}}" alt="order photo">
                                    </a>

                                @endforeach
                            @endif
                            @if ($key == 'file')

                                @foreach($field as $photo)
                                    <p><b>Файл PDF:</b>
                                        <a href="{{asset('uploads/pdf/'.$photo)}}"
                                           style="color: blue;text-decoration: underline" download>
                                            {{$photo}}
                                            {{--                                                                <img src="{{asset('uploads/pdf/'.$photo)}}" alt="pdf file">--}}
                                        </a>
                                    </p>
                                @endforeach
                            @endif
                            @if (gettype($field) == "object")
                                @if(str_contains($field->name, 'vehicle.'))
                                    <li><a>@lang('form.'.$field->name) <span
                                                    class="pull-right badge">{{$field->value}}</span></a>
                                    </li>

                                @endif

                            @endif
                            @if($key && $key == 'city')
                                <p> Город: {{ $field }}</p>


                            @endif

                            @if($key && $key == 'mark')
                                <p> Марка: {{ $field }}</p>

                            @endif
                            @if($key && $key == 'model')
                                <p> Модель: {{ $field }}</p>

                            @endif
                            @if($key && $key == 'power')
                                <p> Мощность л.с.: {{ $field }}</p>
                            @endif
                            @if($key && $key == 'cost')
                                <p> Цена: {{ $field }}</p>

                            @endif
                            @if($key && $key == 'credit')
                                <p> В кредит?: {{ $field }}</p>

                            @endif
                            @if($key && $key == 'young_driver_age')
                                <p> Возраст младшего вод.: {{ $field }}</p>
                            @endif
                            @if($key && $key == 'young_driver_staj')
                                <p> Стаж младшего вод.: {{ $field }}</p>
                            @endif
                        @endforeach
                        @endif
                    {{--@endif--}}

                    </div>
                    <div class="col-xs-1">
                        <a class="btn btn-info" href="{{ action('OrdersController@edit', $order->id) }}"><i
                                    class="fa fa-pencil"></i> Edit</a>
                    </div>
                    <div class="col-xs-2">
                        {!! Form::open(['action' => ['OrdersController@destroy', $order->id], 'method' => 'DELETE']) !!}
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- ================================================== -->
    </div>
@stop