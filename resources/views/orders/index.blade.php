@extends('layouts.app')

@section('title',trans('order.Orders'))
@section('page_header',trans('order.Orders'))

@section('content')
    <div class="fix-height">

        <div class="btn-actionbar">
            <a href="{{ action('OrdersController@create') }}" class="btn btn-app">
                <i class='fa fa-plus-square-o'></i>
                <span>@lang('general.Add New')</span>
            </a>
            <a href="{{ action('ReportsController@postOrders') }}" class="btn btn-app">
                <i class='fa fa-file-excel-o'></i>
                <span>@lang('report.Orders Report')</span>
            </a>
            <a href="{{ action('OrdersController@createFromPdf') }}" class="btn btn-app">
                <i class='fa fa-file-pdf-o'></i>
                <span>@lang('general.UploadPdf')</span>
            </a>
        </div>

        <table class="table table-hover table-valign-middle" id="orders-table">
            <thead>
            <tr>
                <th>@lang('order.Date')</th>
                <th>@lang('order.Name')</th>
                <th>@lang('order.Email')</th>
                <th>@lang('order.Phone')</th>
                <th class="centered">@lang('order.Status')</th>
                <th>@lang('order.Type')</th>
                <th class="centered">@lang('general.Actions')</th>
            </tr>
            </thead>
        </table>
    </div>
@endsection

@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>

    <script src="{{asset('js/vendor/buttons.server-side.js')}}"></script>
    <script type="text/javascript">
        $(function() {
            $('#orders-table').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                ajax: '{!! action('OrdersController@anyData') !!}',
                order: [[ 0, "asc" ]],
                language: {
                    "emptyTable":     "@lang('general.No data available in table')",
                    "info":           "Показаны записи с _START_ по _END_ из _TOTAL_ записей",
                    "infoEmpty":      "@lang('general.Showing 0 to 0 of 0 entries')",
                    "infoFiltered":   "(отфильтровано из _MAX_ записей)",
                    "lengthMenu":     "Показывать по _MENU_ записей",
                    "loadingRecords": "@lang('general.Loading...')",
                    "processing":     "@lang('general.Processing...')",
                    "search":         "@lang('general.Search:')",
                    "zeroRecords":    "@lang('general.No matching records found')",
                    "paginate": {
                        "first":      "@lang('general.First')",
                        "last":       "@lang('general.Last')",
                        "next":       "@lang('general.Next')",
                        "previous":   "@lang('general.Previous')"
                    },
                },

                columns: [
                    { data: 'created_at', name: 'orders.created_at' },
                    { data: 'name', name: 'orders.name' },
                    { data: 'email', name: 'orders..email' },
                    { data: 'phone', name: 'orders.phone' },
                    { data: 'order_status', class: 'centered', name: 'order_statuses.name' },
                    { data: 'order_type', name: 'order_types.name' },
                    { data: 'actions', width:'120px', class: 'centered', name: 'actions', orderable: false, searchable: false},
                ],

            }).on('draw.dt', function (e, settings, data) {
                laravel.initialize();
            });
        });
    </script>
@endsection