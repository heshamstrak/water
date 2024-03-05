@php $name = 'ingredients' @endphp
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
                @if (auth()->user()->hasPermission('read_'.$name))
                    <a href="{{ route('admin.'.$name.'.create') }}" class="btn btn-primary font-weight-bolder">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                                    <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" ></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        New Ingredient
                    </a>
                @endif

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
                                <th>Name</th>
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

            let ingredientTable = $('#{{$name}}-table').DataTable({
                dom: "tiplr",
                serverSide: true,
                processing: true,
                ajax: {
                    url: '{{ route('admin.'.$name.'.data') }}',
                },
            columns: [
                {data: 'record_select', name: 'record_select', searchable: false, sortable: false, width: '1%'},
                {data: 'name', name: 'name'},
                {data: 'created_at', name: 'created_at', searchable: false},
                {data: 'actions', name: 'actions', searchable: false, sortable: false, width: '20%'},
            ],
            order: [[3, 'desc']],
            drawCallback: function (settings) {
                $('.record__select').prop('checked', false);
                $('#record__select-all').prop('checked', false);
                $('#record-ids').val();
                $('#bulk-delete').attr('disabled', true);
            }
        });

        $('#data-table-search').keyup(function () {
            ingredientTable.search(this.value).draw();
        })
    </script>

@endpush