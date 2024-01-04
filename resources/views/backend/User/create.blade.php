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
                        <a href="{{ route('user.index') }}">
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
    <!-- Page Header Close -->
    <div class="row">

        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Add User
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open([
                        'route' => 'user.store',
                        'method' => 'post',
                        'enctype' => 'multipart/form-data',
                    ]) !!}
                    @csrf
                    <div class="form-group mt-4">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('usertype', 'User Type') !!}
                                {{-- <span class="required">*</span> --}}
                            </div>
                            <div class="col-md-6">
                                {!! Form::select('usertype', ['' => '--Select--', '1' => 'Admin', '2' => 'Provider', '3' => 'Seeker'], null, [
                                    'class' => 'form-select',
                                ]) !!}

                                {!! $errors->first('usertype', '<span class="text-danger">:message</span>') !!}
                            </div>

                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('email', 'Email') !!}
                                <span class="required">*</span>
                            </div>
                            <div class="col-md-6">
                                {!! Form::email('email', null, ['placeholder' => 'Enter Email', 'class' => 'form-control mb-2']) !!}
                                {!! $errors->first('email', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('mobile_number', 'Mobile Number') !!}
                                <span class="required">*</span>
                            </div>
                            <div class="col-md-6">
                                {!! Form::text('mobile_number', null, ['placeholder' => 'Enter Mobile Number', 'class' => 'form-control mb-2']) !!}
                                {!! $errors->first('mobile_number', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="services">Services</label>
                            </div>
                            <div class="col-md-6">

                                {!! Form::select('services[]', $service, null, [
                                    'class' => 'form-select',
                                    'multiple' => 'multiple',
                                ]) !!}


                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('profile_video', 'Profile Video') !!}
                                {{-- <span class="required">*</span> --}}
                            </div>
                            <div class="col-md-6">
                                {!! Form::file('profile_video', ['class' => 'form-control', 'accept' => 'video/*']) !!}
                                {!! $errors->first('profile_video', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>


                    <div class="mb-2">
                        <div class="director-container">
                            <div class="form-group mt-2 professional-row">
                                <div class="row">
                                    <div class="col-md-3">
                                        {!! Form::label('professionaldetalis', 'Professional Detalis') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('professionaldetalis[]', null, [
                                            'placeholder' => 'Enter Professional Detalis',
                                            'class' => 'form-control mb-2',
                                        ]) !!}
                                        {!! $errors->first('professionaldetalis', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                    <div class="col-md-3">
                                        <a href="javascript:void(0)" id="addDescriptionLink"
                                            class="btn btn-link btn-wave form-group add-director-btn">
                                            Add Professional Detalis
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-auto director-append" style="max-width: 100%; max-height: 60vh;"></div>
                        </div>

                    </div>
                    <div class="mb-2">
                        <div class="director-container">
                            <div class="form-group mt-2 professional-row">
                                <div class="row">
                                    <div class="col-md-3">
                                        {!! Form::label('education_detalis', 'Education Detalis') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('education_detalis[]', null, [
                                            'placeholder' => 'Enter Education Detalis',
                                            'class' => 'form-control mb-2',
                                        ]) !!}
                                        {!! $errors->first('education_detalis', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                    <div class="col-md-3">
                                        <a href="javascript:void(0)" id="addDescriptionLink"
                                            class="btn btn-link btn-wave form-group add-director-btn">
                                            Add More
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
                                    <button type="submit" id="submitBtn" class="btn btn-secondary btn-wave form-group">
                                        Add User
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group text-center">
                        <div class="row mt-4">
                            <div class="col-md-2 offset-md-3 mx-auto my-auto">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    {!! Form::submit('Add User', ['class' => 'btn btn-secondary btn-wave form-group']) !!}
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="director-container-clone d-none">
        <div class="form-group mt-2">
            <div class="row">
                <div class="col-md-3">
                    {!! Form::label('professionaldetalis', 'Education Detalis') !!}
                </div>
                <div class="col-md-6">
                    {!! Form::text('professionaldetalis[]', null, [
                        'placeholder' => 'Enter Education Detalis',
                        'class' => 'form-control mb-2',
                    ]) !!}
                    {!! $errors->first('education_detalis', '<span class="text-danger">:message</span>') !!}
                </div>
                <div class="col-md-3">
                    <a href="javascript:void(0)" id="delete-btn " class="btn btn-link btn-wave form-group add-director-btn"
                        style="color: red;">
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
