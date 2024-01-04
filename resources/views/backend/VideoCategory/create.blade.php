@extends('partial.master')

@section('page-css')
    <style>
        .required {
            color: red;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between mt-2 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0"></h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb">
                        <a href="{{ route('video-category.index') }}">
                            <button type="button" class="btn btn-outline-secondary btn-wave">
                                <i class="ri-arrow-left-line "></i>
                                Back
                            </button>
                        </a>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Add video Category
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open([
                        'route' => 'video-category.store',
                        'method' => 'post',
                        'enctype' => 'multipart/form-data',
                    ]) !!}
                    @csrf

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('category_id', 'Category') !!}
                                <span class="required">*</span>
                            </div>

                            <div class="col-md-6">
                                <select class="form-select sub-category" data-next_class_name="sub-category-1"
                                    id="category" name="category_id" required data-category="category">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                                {!! $errors->first('category', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('sub_category_1', 'Sub Category 1') !!}
                                <span class="required">*</span>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select sub-category sub-category-1"
                                    data-next_class_name="sub-category-2" id="sub_category" name="Sub Category 1" required
                                    data-category="sub_category">
                                    <option value="">Select Category</option>
                                </select>
                                {!! $errors->first('sub_category', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('sub_category_2', 'Sub Category 2') !!}
                            </div>
                            <div class="col-md-6">
                                <select class="form-select sub-category sub-category-2"
                                    data-next_class_name="sub-category-3" id="sub_category_2" name="sub category_2"
                                    data-category="sub_category_2">
                                    <option value="">Select Category</option>
                                </select>
                                {!! $errors->first('sub_category_2', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('sub_category_3', 'Sub Category 3') !!}

                            </div>
                            <div class="col-md-6">
                                <select class="form-select sub-category sub-category-3"
                                    data-next_class_name="sub-category-4" id="sub_category_3" name="sub_category_3"
                                    data-category="sub_category_3">
                                    <option value="">Select Category</option>
                                </select>
                                {!! $errors->first('sub_category_3', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('sub_category_4', 'Sub Category 4') !!}

                            </div>
                            <div class="col-md-6">
                                <select class="form-select sub-category-4" id="sub_category_4" name="sub_category_4">
                                    <option value="">Select Category</option>
                                </select>
                                {!! $errors->first('sub_category_4', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('category_name', 'Name') !!}
                                <span class="required">*</span>
                            </div>
                            <div class="col-md-6">
                                {!! Form::text('category_name', null, [
                                    'placeholder' => 'Enter Name',
                                    'class' => 'form-control mb-2',
                                    'required' => 'required',
                                ]) !!}
                                {!! $errors->first('category_name', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <div class="row mt-4">
                            <div class="col-md-2 offset-md-3 mx-auto my-auto">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    {!! Form::submit('Add Video Category', ['class' => 'btn btn-secondary btn-wave form-group']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        //  button event
        $(document).ready(function() {
            $('form').submit(function() {
                $('#submitBtn').val('Adding...').prop('disabled', true);
            });
        });

        $(document).on('change', '.sub-category', function() {
            var category_id = $(this).val();
            var categoryType = $(this).data('category');
            var next_class_name = $(this).data('next_class_name');

            if (category_id == "") {
                $('[data-category="' + subCategoryType + '"]').val('');
                return false;
            }
            var formData = new FormData();
            formData.append('category_id', category_id);
            formData.append('categoryType', categoryType);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ route('get-sub-category-list') }}",
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    $("." + next_class_name).html(response.data);
                },
                error: function(response, status, error) {
                    console.log(request.responseText);
                }
            });
        });
    </script>
@endsection
