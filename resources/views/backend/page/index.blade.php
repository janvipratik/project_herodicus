@extends('partial.master')

@section('content')
<div class="row">
    <!-- Page Header -->
    <div class="d-md-flex d-block  align-items-center justify-content-between mt-2 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0"></h1>
        <div class="ms-md-1 ms-0">
            <nav>
                <ol class="breadcrumb ">
                    {{-- <li class="breadcrumb-item"><a href="#">Tables</a></li> --}}
                    <a href="{{ route('page.create') }}"> <button type="button"
                            class="btn btn-outline-secondary btn-wave">
                            {{-- <i class="ri-arrow-left-line "></i> --}}
                            Add Page
                        </button></a>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">
                     Pages
                </div>
            </div>
            <div class="card-body">
                <table id="PageDatatable" class="table table-bordered text-nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<form method="POST" id="FrmStatusUpdate" action="{{ route('change-status-subscription') }}">
    @csrf
    <input type="hidden" value="" name="value" id="value">
    <input type="hidden" value="" name="row_id" id="row_id">

</form>
@endsection

@section('js')
<script type="text/javascript">
    (function(window, jQuery) {
        window.LaravelDataTables = window.LaravelDataTables || {};
        window.LaravelDataTables["PageDatatable"] = jQuery("#PageDatatable").DataTable({
            "serverSide": true,
            // "processing": true,
            "pageLength": 10,

            "ajax": {
                data: function(d) {

                    d.category = jQuery(".datatable-form-filter input[name='filter_category']")
                        .val();
                }
            },
            "columns": [{
                    "name": "row_number",
                    "data": null,
                    "searchable": false,
                    "orderable": false,
                    "render": function(data, type, full, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    "name": "title",
                    "data": "title",
                    "searchable": true,
                    "orderable": true,
                    "defaultContent": "",
                },
                {
                    "name": "sulg",
                    "data": "sulg",
                    "searchable": true,
                    "orderable": true,
                },
                {
                    "name": "status",
                    "data": "status",
                    "searchable": true,
                    "orderable": true,
                },
                {
                    "name": "action",
                    "data": "action",
                    "class": "text-center",
                    "render": null,
                    "searchable": false,
                    "orderable": false,
                    // "width": "80px"
                },

            ],
            "searching": false,
            dom: "<'row'l<'col-sm-12'tr>>" + "<'row'<'col-sm-6'i><'col-sm-6 dt-footer-right'p>>",
            "buttons": [],
            "order": [],
        });
    })(window, jQuery);


    jQuery('.datatable-form-filter input').on('keyup', function(e) {
        window.LaravelDataTables["PageDatatable"].draw();
        e.preventDefault();
    });
    jQuery('.datatable-form-filter select').on('change', function(e) {
        window.LaravelDataTables["PageDatatable"].draw();
        e.preventDefault();
    });

    $(document).on("change", ".change-status", function() {
            var value = $(this).val();
            var row_id = $(this).data("id");
            var $dropdown = $(this);

            var confirm = window.confirm("Are you sure you want to proceed?");
            if (!confirm) {
                return false;
            }


            $('#value').val(value);
            $('#row_id').val(row_id);
            $('#FrmStatusUpdate').submit();
        });

        $(document).on("click", ".alert-confirm", function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    );
                    var id = $(this).data('id');
                    var formData = new FormData();
                    formData.append('id', id);

                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('subscriptions.destroy', ':id') }}".replace(':id', id),
                        data: formData,
                        dataType: "json",
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.status == 200) {
                                window.LaravelDataTables["VideoCategoryDatatable"].draw();
                            } else {
                                Swal.fire('Oops!', 'Something went wrong', 'error');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            Swal.fire('Error!', 'Failed to make the request', 'error');
                        }
                    });
                }
            });
        });
</script>
@endsection