@extends('layouts.app')

@section('title',trans('policy.Policies'))
@section('page_header',trans('policy.Policies'))

@section('content')
  <div class="fix-height">

    <div class="btn-actionbar">
      <a href="{{ action('PoliciesController@create') }}" class="btn btn-app">
        <i class='fa fa-plus-square-o'></i>
        <span>@lang('general.Add New')</span>
      </a>
      <a href="{{ action('PolicyImportController@getImport') }}" class="btn btn-app">
        <i class='fa fa-cloud-upload'></i>
        <span>@lang('policy.Import Policies')</span>
      </a>
      <a href="{{ action('PolicyImportController@getImportXls') }}" class="btn btn-app">
        <i class='fa fa-file-excel-o'></i>
        <span>@lang('policy.Import Policies other')</span>
      </a>
    </div>

    <table class="table table-hover table-valign-middle" id="policies-table">
      <thead>
      <tr>
        <th class="centered">@lang('policy.Company')</th>
        <th>@lang('policy.Issue Date')</th>
        <th>@lang('policy.Number')</th>
        <th>@lang('policy.Policy Date')</th>
        <th>@lang('policy.Client')</th>
        <th>@lang('client.Cell phone')</th>
        <th>@lang('policy.Total Amount')</th>
        <th class="centered">@lang('general.Actions')</th>
      </tr>
      </thead>
    </table>
  </div>
@endsection

@section('scripts')
  <script type="text/javascript">
    $(function() {
      $('#policies-table').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
        ajax: '{!! action('PoliciesController@anyData') !!}',
        order: [[ 1, "desc" ]],
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
          { data: 'company_name', name: 'policies.company_name' },
          { data: 'sign_date', name: 'policies.sign_date', searchable: false },
          { data: 'policy_number', name: 'policies.policy_number' },
          { data: 'policy_dates', name: 'policy_date', orderable: false, searchable: false },
          { data: 'client_title', name: 'clients.last_name' },
          { data: 'cell_phone', name: 'clients.cell_phone'},
          { data: 'p_total', name: 'policies.p_total' },
          { data: 'actions', width:'120px', class: 'centered', name: 'actions', orderable: false, searchable: false},
        ]
      }).on('draw.dt', function (e, settings, data) {
        laravel.initialize();
        $('#policies-table').DataTable().column(5).visible(false)
      });
    });
  </script>
@endsection