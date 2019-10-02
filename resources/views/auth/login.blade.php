@extends('layouts.login')

@section('content')
    <div class="login-box-body">
        {!! Form::open(array('url' => '/login', 'class'=>'form-horizontal' )) !!}
        <p class="login-box-msg">{{trans('Login to begin')}}</p>
        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            {!! Form::text('email', null, array('class'=>'form-control','placeholder'=>trans('Email'))) !!}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
            {!! Form::password('password', array('class'=>'form-control','placeholder'=>trans('Password'))) !!}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox">
                    <label>
                        {!! Form::checkbox('remember', 'true') !!} {{ trans('Remember me') }}
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                {!! Form::submit(trans('Sign in'), array('class'=>'btn btn-primary btn-block btn-flat')) !!}
            </div>
            <!-- /.col -->
        </div>
        {!! Form::close() !!}
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
