@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 bg-light rounded-3 vh_100 d-flex align-items-center justify-content-center">
        <div class="container py-5 d-flex align-items-center justify-content-center">
            <div class="logo_laravel text-center">
                <img src="{{ asset('img/photo.jpg') }}" alt="DC Logo" height="300" class="rounded-4 shadow">
            </div>

            <div class="info_contaienr ps-4">
                <h1 class="">
                    Hi, I'm Damiano
                </h1>

                <p><i>
                        My job is to create <b>tailor-made sites</b> for you
                    </i></p>
            </div>
        </div>
    </div>
@endsection
