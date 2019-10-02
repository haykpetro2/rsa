@extends('layouts.app')

@section('title',trans('policy.Edit Policy'))
@section('page_header',trans('policy.Edit Policy'))

@section('content')
	<div class="fix-height">
		<div class="btn-actionbar">
			<a href="{{ action('PoliciesController@index') }}" class="btn btn-app">
				<i class='fa fa-chevron-left'></i>
				<span>{{ trans('general.Back to list') }}</span>
			</a>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				{!! Form::model($policy, ['url' => action('PoliciesController@update', $policy->id), 'method' => 'PUT', 'class' => 'simple_form']) !!}
				@include('policies.form', ['policy'=>$policy])
				{!! Form::close() !!}
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				@include('_partials.files-dropzone', ['policy'=>$policy])
			</div>
		</div>
		<br/>
		<br/>
	</div>
@endsection

@section('scripts')
	<script src="/js/policies.js"></script>
	<script src="/js/files-dropzone.js"></script>
@stop