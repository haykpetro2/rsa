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
                {{--<div class="col-sm-6 required-group {{ ($errors->first('name')) ? 'has-error'  :''}}">
                    {!! Form::label('name', trans('order.Name'), array('class'=>'control-label')) !!}
                    {!! Form::text('name', null, array('class' => 'form-control')) !!}
                </div>--}}
                {{--<div class="col-sm-3 {{ ($errors->first('email')) ? 'has-error'  :''}}">
                    {!! Form::label('email', trans('order.Email'), array('class'=>'control-label')) !!}
                    {!! Form::text('email', null, array('class' => 'form-control')) !!}
                </div>--}}
                {{--<div class="col-sm-6 required-group {{ ($errors->first('phone')) ? 'has-error'  :''}}">
                    {!! Form::label('phone', trans('order.Phone'), array('class'=>'control-label')) !!}
                    {!! Form::text('phone', null, array('class' => 'form-control')) !!}
                </div>--}}
                {{--<div class="col-sm-3 {{ ($errors->first('delivery')) ? 'has-error'  :''}}">
                    <label class="control-label">&nbsp;</label>
                    <div class="form-control no-border">
                        <label for="delivery">
                            {!! Form::hidden('delivery',0) !!}
                            {!! Form::checkbox('delivery', 1, null, ['id'=>'delivery']) !!} {{trans('order.Delivery')}}
                        </label>
                    </div>
                </div>--}}
            </div>
            {{--<div class="row">
                <div class="col-sm-12 {{ ($errors->first('comment')) ? 'has-error'  :''}}">
                    {!! Form::label('comment', trans('order.Comment'), array('class'=>'control-label')) !!}
                    {!! Form::textarea('comment', null, array('class' => 'form-control','rows' => '0')) !!}
                </div>
            </div>--}}
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
            {{--<div class="row">
                <div class="col-sm-12 {{ ($errors->first('notes')) ? 'has-error'  :''}}">
                    {!! Form::label('notes', trans('order.Notes'), array('class'=>'control-label')) !!}
                    {!! Form::textarea('notes', null, array('class' => 'form-control','rows' => '0')) !!}
                </div>
            </div>--}}
            <div class="row">
                <div class="col-sm-12 {{ ($errors->first('notes')) ? 'has-error'  :''}}">
                    {!! Form::label('notes', trans('order.File'), array('class'=>'control-label')) !!}
                    {!! Form::file('file', array('class' => 'form-control','id'=>'pdf','rows' => '0','required'=>true)) !!}
                </div>
            </div>

{{--            <h3>@lang('order.Details')</h3>--}}

        </div>
{{--        <div id="editor"></div>--}}
        <div class="box-footer">
            <div class="form-group">
                <div class='col-sm-offset-4 col-sm-8'>
                    <button name="submit" type="submit" class="btn btn-lg btn-success">
                        <i class="fa fa-floppy-o fa-fw"></i> {{trans('general.Save')}}
                    </button>
                    <a class="btn btn-lg btn-default"
                       href="{{ action('OrdersController@index') }}">{{trans('general.Cancel')}}</a>
                    {{--<a class="btn btn-lg btn-default"
                       href="{{ route('pdf.download',$order->id) }}"><i class="fa fa-lg fa-print"></i>Экспортировать</a>--}}
                </div>
            </div>
        </div>
    </div>
</div>
