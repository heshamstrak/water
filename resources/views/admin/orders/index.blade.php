@php $name = 'orders' @endphp
@extends('layouts.admin.app')
@section('content')

<div class="card card-custom gutter-b">
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            <h3 class="card-label text-capitalize">
                {{$name}}
            </h3>
        </div>
        <div class="card-toolbar">

            <div>
                @if (auth()->user()->hasPermission('delete_'.$name))
                    <form method="post" action="{{ route('admin.'.$name.'.bulk_delete') }}" style="display: inline-block;">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="record_ids" id="record-ids">
                        <button type="submit" class="btn btn-danger" id="bulk-delete" disabled="true"><i class="fa fa-trash"></i> Delete</button>
                    </form><!-- end of form -->
                @endif
            </div>
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <div class="row" style="margin-top:20px">

            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" id="data-table-search" class="form-control" autofocus placeholder="Search">
                </div>
            </div>

        </div><!-- end of row -->
        <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table datatable table-bordered table-checkable dataTable no-footer dtr-inline " id="{{$name}}-table" role="grid" aria-describedby="kt_datatable_info" style="width: 1233px;">
                        <thead>
                            <tr>
                                <th>
                                    <div class="animated-checkbox">
                                        <label class="m-0">
                                            <input type="checkbox" id="record__select-all">
                                            <span class="label-text"></span>
                                        </label>
                                    </div>
                                </th>
                                <th>User Name</th>
                                <th>Quantity</th>
                                <th>Total Amount </th>
                                <th>Type</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <!--end: Datatable-->
    </div>
</div>

@endsection






@push('js')

    <script>

            let rolesTable = $('#{{$name}}-table').DataTable({
                dom: "tiplr",
                serverSide: true,
                processing: true,
                ajax: {
                    url: '{{ route('admin.'.$name.'.data') }}',
                },
            columns: [
                {data: 'record_select', name: 'record_select', searchable: false, sortable: false, width: '1%'},
                {data: 'name', name: 'name'},
                {data: 'quantity', name: 'quantity'},
                {data: 'price', name: 'price'},
                {data: 'type', name: 'type'},
                {data: 'created_at', name: 'created_at', searchable: false},
                {data: 'actions', name: 'actions', searchable: false, sortable: false, width: '25%'},
            ],
            order: [[5, 'desc']],
            drawCallback: function (settings) {
                $('.record__select').prop('checked', false);
                $('#record__select-all').prop('checked', false);
                $('#record-ids').val();
                $('#bulk-delete').attr('disabled', true);
            }
        });

        $('#data-table-search').keyup(function () {
            rolesTable.search(this.value).draw();
        })
    </script>

@endpush