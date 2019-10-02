@extends('layouts.app')

@section('title', trans('general.Dashboard'))
@section('page_header', trans('general.Dashboard'))

@section('content')
    <div class="fix-height">
        @if(sizeof($expiring_policies) > 0)
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">@lang('general.Expiring policies in 60 days')</h3>
                            <div class="box-tools">
                                <span class="label label-danger">{{sizeof($expiring_policies)}}</span>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>@lang('policy.Policy Exp Date')</th>
                                    <th>@lang('policy.Company')</th>
                                    <th>@lang('policy.Client')</th>
                                    <th>@lang('policy.Vehicle')</th>
                                    <th>@lang('policy.Total Amount')</th>
                                    <th>@lang('general.SMS Notification')</th>
                                </tr>
                                @foreach ($expiring_policies as $policy)
                                    <tr>
                                        <td><span class="label label-warning">{{$policy->to_str}}</span></td>
                                        <td>
                                            @if($policy->company_name == trans('policy.Company Megaruss'))
                                                <span class="label label-success">{{$policy->company_name}}</span>
                                            @else
                                                <span class="label label-danger">{{$policy->company_name}}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{action('ClientsController@view', ['id'=>$policy->client->id])}}">{{$policy->client->legal_name}}</a>
                                        </td>
                                        <td><span class="label label-default">{{$policy->vehicle->title}}</span></td>
                                        <td><span class="label label-success">{{$policy->p_total}}</span></td>
                                        <td class="centered">
                                            <button type="button" class="btn btn-xs btn-default" data-toggle="modal" data-target="#smsModal" title="@lang('general.SMS Notification')" data-policy_id="{{$policy->id}}" data-sms_text="@lang('general.SMS Notification Template 1', ['client_name'=>$policy->client->short_name, 'exp_date'=>$policy->date_to])">
                                                <i class="fa fa-lg fa-envelope-o"></i>
                                            </button>
                                            <a class="btn btn-xs btn-default" data-toggle="tooltip" title="@lang('general.Remove from list')" href="{{action('PoliciesController@exclude', ['id'=>$policy->id])}}" data-method="post" data-token="{{csrf_token()}}" data-confirm="@lang('general.Are you sure?')"><i class="fa fa-lg fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

            </div>
        @endif

        @if(sizeof($new_orders) > 0)
            <div class="row">

                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">@lang('general.New Orders')</h3>
                            <div class="box-tools">
                                <span class="label label-danger">{{sizeof($new_orders)}}</span>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>@lang('order.Date')</th>
                                    <th>@lang('order.Name')</th>
                                    <th>@lang('order.Phone')</th>
                                    <th>@lang('order.Status')</th>
                                    <th>@lang('order.Type')</th>
                                </tr>
                                @foreach ($new_orders as $order)

                                    <tr>
                                        <td><span class="label label-warning">{{$order->created_at}}</span></td>
                                        <td>
                                            <a href="{{action('OrdersController@edit', ['id'=>$order->id])}}">{{$order->name}}</a>
                                        </td>
                                        <td><span class="label label-default">{{$order['phone']}}</span></td>
                                        <td><span class="label label-success">{{$order->status->name}}</span></td>
                                        @if($order->type)
                                            <td><span class="label label-default">{{$order->type->name}}</span></td>
                                        @endif

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        @endif
    </div>
    <!-- Modal -->
    <div class="modal fade" id="smsModal" tabindex="-1" role="dialog" aria-labelledby="smsModalLabel">
        <div class="modal-dialog" role="document">
            {!! Form::open(['url' => action('SmsController@send'), 'method' => 'POST', 'class' => 'simple_form']) !!}
            {!! Form::hidden('policy_id', null, ['class'=>'policy_id']) !!}
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
            modal.find('.policy_id').val(button.data('policy_id'));
        })
    </script>
@endsection