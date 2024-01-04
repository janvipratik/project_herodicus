    @extends('partial.master')
    @section('content')
        <div class="row">
            <!-- Page Header -->
            <div class="d-md-flex d-block  align-items-center justify-content-between mt-2 page-header-breadcrumb">
                <div class="col-10 ms-0">
                    @include('error_message')
                </div>
                <h1 class="page-title fw-semibold fs-18 mb-0"></h1>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <ol class="breadcrumb">
                            <a href="{{ route('add.category') }}"> <button type="button"
                                    class="btn btn-outline-secondary btn-wave">
                                    Add Category
                                </button></a>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Page Header Close -->
        <!-- Start::row-1 -->

        <div class="row">
            {{-- @include('errormessage') --}}
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            categories
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="CategoryDatatable" class="table table-bordered text-nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Category Name</th>
                                    <th>Sub Category</th>
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
        <form method="POST" id="FrmStatusUpdate" action="{{ route('chage-status-category') }}">
            @csrf
            <input type="hidden" value="" name="value" id="value">
            <input type="hidden" value="" name="row_id" id="row_id">
    
        </form>
    @endsection

    @section('js')
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}

        <script type="text/javascript">
            (function(window, jQuery) {
                window.LaravelDataTables = window.LaravelDataTables || {};
                window.LaravelDataTables["CategoryDatatable"] = jQuery("#CategoryDatatable")
                    .DataTable({
                        "serverSide": true,
                        // "processing": true,
                        "pageLength": 10,
                        "ajax": {
                            data: function(d) {

                                d.name = jQuery(".datatable-form-filter input[name='filter_name']")
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
                                "name": "category_name",
                                "data": "category_name",
                                "searchable": true,
                                "orderable": true,
                            },
                            {
                                "name": "sub_category",
                                "data": "sub_category",
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
                window.LaravelDataTables["CategoryDatatable"].draw();
                e.preventDefault();
            });
            jQuery('.datatable-form-filter select').on('change', function(e) {
                window.LaravelDataTables["CategoryDatatable"].draw();
                e.preventDefault();
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
                            type: "POST",
                            url: "{{ route('delete.category') }}",
                            data: formData,
                            dataType: "json",
                            processData: false,
                            contentType: false,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                if (response.status == 200) {
                                    window.LaravelDataTables["CategoryDatatable"].draw();
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


            // $(document).on("change", "#archive", function(e) {
            //     var archiveChecked = this.checked ? 1 : 0;
            //     $('#archive_status').val(archiveChecked);
            //     window.LaravelDataTables["CategoryDatatable"].draw();
            //     e.preventDefault();
            // });  


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
        </script>
    @endsection
