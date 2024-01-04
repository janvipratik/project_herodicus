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
                        <a href="{{ route('subscriptions.index') }}">
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
                        Add Subscription
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open([
                        'route' => 'subscriptions.store',
                        'method' => 'post',
                        'enctype' => 'multipart/form-data',
                    ]) !!}
                    @csrf

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('model_type', 'Subscription Type') !!}
                                <span class="required">*</span>
                            </div>

                            <div class="col-md-6">
                                <select class="form-select" id="model_type" name="model_type" required>
                                    <option value="">Select Type</option>
                                    <option value="0">Year</option>
                                    <option value="1">Month</option>
                                </select>
                                {!! $errors->first('model_type', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('title', 'Title') !!}
                                <span class="required">*</span>
                            </div>
                            <div class="col-md-6">
                                {!! Form::text('title', null, [
                                    'placeholder' => 'Enter Title',
                                    'class' => 'form-control mb-2',
                                    'required' => 'required',
                                ]) !!}
                                {!! $errors->first('title', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('price', 'Price') !!}
                                <span class="required">*</span>
                            </div>
                            <div class="col-md-6">
                                {!! Form::text('price', null, [
                                    'placeholder' => 'Enter Price',
                                    'class' => 'form-control mb-2',
                                    'required' => 'required',
                                ]) !!}
                                {!! $errors->first('price', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="director-container">
                            <div class="form-group mt-2 description-row">
                                <div class="row">
                                    <div class="col-md-3">
                                        {!! Form::label('description', 'Description') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('description[]', null, [
                                            'placeholder' => 'Enter Description',
                                            'class' => 'form-control mb-2',
                                        ]) !!}
                                        {!! $errors->first('description', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                    <div class="col-md-2">
                                    <a href="javascript:void(0)" id="addDescriptionLink" class="btn btn-link btn-wave form-group add-director-btn">
                                        Add Description
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-auto director-append" style="max-width: 100%; max-height: 60vh;"></div>
                        </div>
                       
                    </div>
                    

                    <div class="form-group">
                        <div class="row mt-2">
                            <div class="col-md-2 offset-md-3">
                                <div class="form-group ">
                                    <label>&nbsp;</label>
                                    <button type="submit" id="submitBtn" class="btn btn-secondary btn-wave">
                                        Add Subscriptions
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="director-container-clone d-none">
        <div class="form-group mt-2">
            <div class="row">
                <div class="col-md-3">
                    {!! Form::label('description', 'Description') !!}
                </div>
                <div class="col-md-6">
                    {!! Form::text('description[]', null, [
                        'placeholder' => 'Enter Description',
                        'class' => 'form-control mb-2',
                    ]) !!}
                    {!! $errors->first('description', '<span class="text-danger">:message</span>') !!}
                </div>
                <div class="col-md-3">
                    <a href="javascript:void(0)" id="addDescriptionLink" class="btn btn-link btn-wave form-group add-director-btn" style="color: red;">
                        Delete
                    </a>
                </div>
            </div>
        </div>
        <div class="overflow-auto director-append" style="max-width: 100%; max-height: 60vh;">

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


            $(document).on("click", ".delete-btn", function() {
                $(this).closest('.form-group').remove();
            });
        });
        $(document).on("click", ".add-director-btn", function() {
            var html = $(".director-container-clone").html();
            $(".director-container").append(html);
        });
    </script>
@endsection
