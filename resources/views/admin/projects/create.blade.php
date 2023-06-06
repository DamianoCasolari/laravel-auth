@extends('layouts.admin')
@section('title', 'Create new project')
@section('content')

    @include('profile.partials.validation_errors')
    <div class=" container d-flex justify-content-end py-4">
        <a href="{{ route('admin.projects.index') }}" type="button" class="btn btn-dark my_button ">
            <i class="fa-solid fa-house"></i> Back to index</a>
    </div>
    <h1 class="text-primary container font_title">Add new Project</h1>
    <div class="container d-flex justify-content-center align-item-center">
        <div class="form_container w-100">
            <form class="text-white" action="{{ route('admin.projects.store') }}" method="POST" class="w-100">
                @csrf

                <div class="mb-3 ">

                    <label for="title" class="col-4 col-form-label">title</label>
                    <div class="col-12">
                        <input type="text" class="form-control w-100" name="title" id="title"
                            value="{{ old('title') }}" placeholder="Title">
                    </div>
                    @error('title')
                        <div class="alert alert-danger position-relative" style="margin-top:1px;" role="alert">
                            <i class="fa-regular fa-xl fa-hand-pointer up_down"></i>
                            <strong>Title, Error: </strong>{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 ">
                    <label for="logo" class="col-4 col-form-label">Logo</label>
                    <div class="col-12">
                        <input type="text" class="form-control w-100" name="logo" id="logo"
                            value="{{ old('logo') }}" placeholder="Logo">
                    </div>
                    @error('logo')
                        <div class="alert alert-danger position-relative" style="margin-top:1px;" role="alert">
                            <i class="fa-regular fa-xl fa-hand-pointer up_down"></i>
                            <strong>Logo, Error: </strong>{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 ">
                    <label for="functionality" class="col-4 col-form-label">functionality</label>
                    <div class="col-12">
                        <input type="text" class="form-control w-100" name="functionality" id="functionality"
                            value="{{ old('functionality') }}" placeholder="Functionality">
                    </div>
                    @error('functionality')
                        <div class="alert alert-danger position-relative" style="margin-top:1px;" role="alert">
                            <i class="fa-regular fa-xl fa-hand-pointer up_down"></i>
                            <strong>functionality, Error: </strong>{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 ">
                    <label for="link" class="col-4 col-form-label">Link</label>
                    <div class="col-12">
                        <input type="text" class="form-control w-100" name="link" id="link"
                            value="{{ old('link') }}" placeholder="Link">
                    </div>
                    @error('link')
                        <div class="alert alert-danger position-relative" style="margin-top:1px;" role="alert">
                            <i class="fa-regular fa-xl fa-hand-pointer up_down"></i>
                            <strong>Link, Error: </strong>{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 ">
                    <label for="languages_used" class="col-4 col-form-label">languages_used</label>
                    <div class="col-12">
                        <input type="text" class="form-control w-100" name="languages_used" id="languages_used"
                            value="{{ old('languages_used') }}" placeholder="Languages used">
                    </div>
                    @error('languages_used')
                        <div class="alert alert-danger position-relative" style="margin-top:1px;" role="alert">
                            <i class="fa-regular fa-xl fa-hand-pointer up_down"></i>
                            <strong>Launguage_used, Error: </strong>{{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 text-center col-12">
                    <div class=" col-12 mt-5">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection