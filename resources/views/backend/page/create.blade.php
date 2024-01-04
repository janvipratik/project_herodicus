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
                        <a href="{{ route('page.index') }}">
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
                        Add Page
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open([
                        'route' => 'page.store',
                        'method' => 'post',
                        'enctype' => 'multipart/form-data',
                    ]) !!}
                    @csrf

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
                                {!! Form::label('slug', 'Slug') !!}
                                <span class="required">*</span>
                            </div>
                            <div class="col-md-6">
                                {!! Form::text('slug', null, [
                                    'placeholder' => 'Enter Slug',
                                    'class' => 'form-control mb-2',
                                    'required' => 'required',
                                ]) !!}
                                {!! $errors->first('slug', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('description', 'Description') !!}
                                <span class="required">*</span>
                            </div>
                            <div class="col-md-6">
                                {{-- <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Quill Snow Editor
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="editor">
                                                    <h4><b class="ql-size-large">Quill Snow</b> is a free, open source <a href="https://github.com/quilljs/quill/" target="_blank">Quill Editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/" target="_blank">modular architecture</a> and expressive API, it is completely customizable to fit any need.</h4>
                                                    <p><br></p>
                                                    <ol>
                                                        <li class="ql-size-normal">Write text select and edit with multiple options.</li>
                                                        <li class="">This is quill snow editor.</li>
                                                        <li class="">Easy to customize and flexible.</li>
                                                    </ol>
                                                    <p><br></p>
                                                    <h4>Quill officially supports a standard toolbar theme <a href="https://github.com/quilljs/quill/" target="_blank">"Snow"</a> and a floating tooltip theme <a href="https://github.com/quilljs/quill/" target="_blank">"Bubble"</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>


                  
                    <div class="form-group text-center">
                        <div class="row mt-5">
                            <div class="col-md-2 offset-md-3 mx-auto my-auto">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    {!! Form::submit('Add Page', ['class' => 'btn btn-secondary btn-wave form-group']) !!}
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
        $(document).ready(function() {
            $('form').submit(function() {
                $('#submitBtn').val('Adding...').prop('disabled', true);
            });
        });

        // var quill = new Quill('#editor', {
        //     theme: 'snow',
        //     placeholder: 'Enter Description',
        // });

        // quill.on('text-change', function() {
        //     document.querySelector('input[name="description"]').value = quill.root.innerHTML;
        // });
        
    </script>
    <script>
        CKEDITOR.replace('editorContainer');
    </script>
@endsection
