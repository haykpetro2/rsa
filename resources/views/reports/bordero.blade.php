@extends('layouts.app')

@section('title',trans('report.Bordero Report'))
@section('page_header',trans('report.Bordero Report'))

@section('content')
    <div class="fix-height">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {!! Form::open(['url' => action('ReportsController@postBordero'), 'class' => 'simple_form form-horizontal']) !!}
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('report.Report params')</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            {!! Form::label('company_name', trans('report.Company Name'), array('class'=>'col-sm-4 control-label')) !!}
                            <div class="col-sm-6">
                                <select name="company_name[]" id="company_name" multiple="multiple" class="select2 form-control" data-placeholder="{{trans('report.Company Name')}}">
                                    <option value=" "> </option>
                                    @foreach ($companies as $k=>$v)
                                        <option value="{{$v['company_name']}}">{{$v['company_name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group {{ ($errors->first('number_from')) ? 'has-error'  :''}}">
                            {!! Form::label('number_from', trans('report.Number from'), array('class'=>'col-sm-4 control-label')) !!}
                            <div class="col-sm-6">{!! Form::text('number_from', null, array('class' => 'form-control')) !!}</div>
                        </div>
                        <div class="form-group {{ ($errors->first('number_to')) ? 'has-error'  :''}}">
                            {!! Form::label('number_to', trans('report.Number to'), array('class'=>'col-sm-4 control-label')) !!}
                            <div class="col-sm-6">{!! Form::text('number_to', null, array('class' => 'form-control')) !!}</div>
                        </div>
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