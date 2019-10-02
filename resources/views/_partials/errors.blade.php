@if($errors->any())
    <div class="alert alert-danger">
        {{trans('general.Fix all errors to proceed')}}
    </div>
@endif