@extends('layouts.app')

@section('title',trans('report.Orders Report'))
@section('page_header',trans('report.Orders Report'))

@section('content')
    <div class="fix-height">
        <div class="btn-actionbar">
            <a href="{{ action('OrdersController@index') }}" class="btn btn-app">
                <i class='fa fa-arrow-circle-left'></i>
                <span>@lang('general.Back to list')</span>
            </a>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {!! Form::open(['url' => action('ReportsController@postOrders'), 'class' => 'simple_form form-horizontal']) !!}
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('report.Report params')</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group {{ ($errors->first('dt_from')) ? 'has-error'  :''}}">
                            {!! Form::label('dt_from', trans('report.Date from'), array('class'=>'col-sm-4 control-label')) !!}
                            <div class="col-sm-6">{!! Form::text('dt_from', null, array('class' => 'form-control datepicker')) !!}</div>
                        </div>
                        <div class="form-group {{ ($errors->first('dt_to')) ? 'has-error'  :''}}">
                            {!! Form::label('dt_to', trans('report.Date to'), array('class'=>'col-sm-4 control-label')) !!}
                            <div class="col-sm-6">{!! Form::text('dt_to', null, array('class' => 'form-control datepicker')) !!}</div>
                        </div>
                    </div>
                    <div class="box-footer centered">
                        <button type="submit" class="btn btn-default">@lang('report.View Report')</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop