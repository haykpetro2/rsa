@extends('layouts.app')

@section('title',trans('order.Create Order'))
@section('page_header',trans('order.Create Order'))

@section('content')
    <div class="fix-height">
        <div class="btn-actionbar">
            <a href="{{ action('OrdersController@index') }}" class="btn btn-app">
                <i class='fa fa-chevron-left'></i>
                <span>{{ trans('general.Back to list') }}</span>
            </a>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {!! Form::model($order, ['url' => action('OrdersController@uploadStore'), 'class' => 'simple_form','files'=>true]) !!}
                @include('orders.pdf', ['order'=>$order])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop