@extends('layouts.app')

@section('title',trans('policy.Import Policies'))
@section('page_header',trans('policy.Import Policies'))

@section('content')
	<div class="fix-height">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::open(['url' => action('PolicyImportController@postImport'), 'files' => true, 'class' => 'simple_form form-horizontal']) !!}
				<div class="box box-warning">
					<div class="box-header with-border">
						<h3 class="box-title">@lang('policy.Import params')</h3>
					</div>
					<div class="box-body">
						<div class="form-group required-group {{ ($errors->first('import_file')) ? 'has-error'  :''}}">
							{!! Form::label('import_file', trans('policy.File'), array('class'=>'col-sm-4 control-label')) !!}
							<div class="col-sm-6">
								<input name="import_file" type="file" id="import_file" class="form-control">
							</div>
						</div>
					</div>
					<div class="box-footer centered">
						<button type="submit" class="btn btn-default">@lang('policy.Upload file')</button>
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop