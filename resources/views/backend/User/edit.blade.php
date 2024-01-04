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
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Update ManageUser
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::model($user, [
                        'route' => ['user.update', 'user' => $user->id],
                        'method' => 'PUT',
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
                                {!! Form::select('usertype', ['' => '--Select--', '1' => 'Admin', '2' => 'Provider', '3' => 'Seeker'], $user->usertype ?? null, [
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
                                {!! Form::email('email', $user->email, ['placeholder' => 'Enter Email', 'class' => 'form-control mb-2']) !!}
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
                                {!! Form::text('mobile_number', $user->mobile_number, ['placeholder' => 'Enter Mobile Number', 'class' => 'form-control mb-2']) !!}
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

                                {!! Form::select('services[]', $service, $user->, [
                                    'class' => 'form-select',
                                    'multiple' => 'multiple',
                                ]) !!}


                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mt-2">
                            <div class="col-md-2 offset-md-3">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    {!! Form::submit('Update User', ['class' => 'btn btn-secondary btn-wave form-group']) !!}

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

    
