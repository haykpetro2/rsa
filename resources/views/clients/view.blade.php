@extends('layouts.app')

@section('title',trans('client.Client card'))
@section('page_header',trans('client.Client card'))

@section('content')
    <div class="fix-height">
        <div class="btn-actionbar">
            <a href="{{ action('PoliciesController@index') }}" class="btn btn-app">
                <i class='fa fa-chevron-left'></i>
                <span>{{ trans('general.Back to list') }}</span>
            </a>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <h3 class="profile-username text-center">{{$client->legal_name}}</h3>
                        <p class="text-muted text-center">
                            @if($client->is_company)
                                {{$client->company_inn}}
                            @else
                                {{$client->date_birth}}
                            @endif
                        </p>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>@lang('client.Vehicles')</b> <a class="pull-right">{{count($client->vehicles)}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>@lang('client.Drivers')</b> <a class="pull-right">{{count($client->drivers)}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>@lang('client.Policies')</b> <a class="pull-right">{{count($client->policies)}}</a>
                            </li>
                        </ul>
                        <a href="{{action('PoliciesController@create', ['client_id'=>$client->id])}}" class="btn btn-success btn-block"><i class="fa fa-plus"></i> <b>@lang('policy.Create Additional Policy')</b></a>
                        <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#smsModal" title="@lang('general.SMS Notification')" data-client_id="{{$client->id}}" data-sms_text="@lang('general.SMS Notification Template 2', ['client_name'=>$client->short_name])">
                            <i class="fa fa-envelope"></i> <b>@lang('client.Send sms')</b>
                        </a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('client.Additional info')</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if(!empty($client->full_address))
                            <strong><i class="fa fa-map-marker margin-r-5"></i> @lang('client.Address')</strong>
                            <p class="text-muted">{{$client->full_address}}</p>
                            <hr>
                        @endif
                        @if(Auth::user()->role == 2)
                        @if(!empty($client->passport_full))
                            <strong><i class="fa fa-file-o margin-r-5"></i> @lang('client.Passport')</strong>
                            <p class="text-muted">{{$client->passport_full}}</p>
                            <hr>
                        @endif
                        @if(!empty($client->email))
                            <strong><i class="fa fa-envelope-o margin-r-5"></i> @lang('client.Email')</strong>
                            <p class="text-muted">{{$client->email}}</p>
                            <hr>
                        @endif
                        @if(!empty($client->cell_phone))
                            <strong><i class="fa fa-mobile margin-r-5"></i> @lang('client.Cell phone')</strong>
                            <p class="text-muted">{{$client->cell_phone}}</p>
                            <hr>
                        @endif
                        @endif
                        @if(!empty($client->notes))
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> @lang('client.Notes')</strong>
                            <p class="text-muted">{{$client->notes}}</p>
                        @endif
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#policies" data-toggle="tab">@lang('client.Policies')</a></li>
                        <li><a href="#vehicles" data-toggle="tab">@lang('client.Vehicles')</a></li>
                        <li><a href="#drivers" data-toggle="tab">@lang('client.Drivers')</a></li>
                    </ul>
                    <div class="tab-content no-padding">
                        <div class="active tab-pane" id="policies">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th class="centered">@lang('policy.Company')</th>
                                    <th>@lang('policy.Issue Date')</th>
                                    <th>@lang('policy.Number')</th>
                                    <th>@lang('policy.Policy Exp Date')</th>
                                    <th>@lang('policy.Vehicle')</th>
                                    <th>@lang('policy.Total Amount')</th>
                                    <th class="centered">@lang('general.Actions')</th>
                                </tr>
                                @foreach ($client->policies as $policy)
                                    <tr>
                                        <td>
                                            @if($policy->company_name == trans('policy.Company Megaruss'))
                                                <span class="label label-success">{{$policy->company_name}}</span>
                                            @else
                                                <span class="label label-danger">{{$policy->company_name}}</span>
                                            @endif
                                        </td>
                                        <td><span class="label label-default">{{$policy->sign_date}}</span></td>
                                        <td><span class="label label-default">{{$policy->policy_serial}} {{$policy->policy_number}}</span></td>
                                        <td><span class="label label-danger">{{$policy->to_str}}</span></td>
                                        <td><span class="label label-default">{{$policy->vehicle->title}}</span></td>
                                        <td><span class="label label-success">{{$policy->p_total}}</span></td>
                                        <td>
                                            <a class="btn btn-xs btn-default" data-toggle="tooltip" title="@lang('policy.Export Policy')" href="{{action('PoliciesController@export', ['id'=>$policy->id])}}"><i class="fa fa-lg fa-print"></i></a>
                                            <a class="btn btn-xs btn-default" data-toggle="tooltip" title="@lang('policy.Edit Policy')" href="{{action('PoliciesController@edit', ['id'=>$policy->id])}}"><i class="fa fa-lg fa-edit"></i></a>
                                            <a class="btn btn-xs btn-default" data-toggle="tooltip" title="@lang('policy.Delete Policy')" href="{{action('PoliciesController@destroy', ['id'=>$policy->id])}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="@lang('general.Are you sure?')"><i class="fa fa-lg fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="vehicles">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>@lang('vehicle.Title')</th>
                                    <th>@lang('vehicle.Sign')</th>
                                    <th>@lang('vehicle.Vin')</th>
                                </tr>
                                @foreach ($client->vehicles as $vehicle)
                                    <tr>
                                        <td><span class="label label-default">{{$vehicle->title}}</span></td>
                                        <td><span class="label label-default">{{$vehicle->sign}}</span></td>
                                        <td><span class="label label-default">{{$vehicle->vin}}</span></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="drivers">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>@lang('client.Full name')</th>
                                    <th>@lang('client.Date of Birth')</th>
                                    <th>@lang('client.Ratio')</th>
                                    <th>@lang('client.Driving experience')</th>
                                    <th>@lang('client.Driver license')</th>
                                </tr>
                                @foreach ($client->drivers as $driver)
                                    <tr>
                                        <td><span class="label label-default">{{$driver->name}}</span></td>
                                        <td><span class="label label-default">{{$driver->date_birth}}</span></td>
                                        <td><span class="label label-default">{{$driver->kbm}}</span></td>
                                        <td><span class="label label-default">{{$driver->exp}}</span></td>
                                        <td><span class="label label-default">{{$driver->driver_license}}</span></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="smsModal" tabindex="-1" role="dialog" aria-labelledby="smsModalLabel">
        <div class="modal-dialog" role="document">
            {!! Form::open(['url' => action('SmsController@send'), 'method' => 'POST', 'class' => 'simple_form']) !!}
            {!! Form::hidden('client_id', null, ['class'=>'client_id']) !!}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">@lang('general.SMS Notification send')</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::textarea('sms_text', null, array('class' => 'form-control sms_text')) !!}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">@lang('general.Cancel')</button>
                    <button type="submit" name="submit" class="btn btn-primary">@lang('general.Send')</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('#smsModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var modal = $(this);
            modal.find('.sms_text').val(button.data('sms_text'));
            modal.find('.client_id').val(button.data('client_id'));
        })
    </script>
@endsection