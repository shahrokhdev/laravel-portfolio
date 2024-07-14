<?php
App::setLocale(session('locale'));
?>
@extends('layout.master')
@section('title', 'home')

@section('main-content')

    <div class="container" dir="{{ session('locale') == 'fa' ? 'rtl' : 'ltr' }}">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-12 col-md-6 mt-3">
                <div class="image-box p-5">
                    <svg id="10015.io" viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <clipPath id="blob">
                                <path fill="#474bff"
                                    d="M467,275.5Q460,311,444,344Q428,377,400,399.5Q372,422,342,442.5Q312,463,276,461.5Q240,460,205.5,456.5Q171,453,138.5,439Q106,425,82.5,398Q59,371,38.5,341.5Q18,312,19,276Q20,240,26.5,206.5Q33,173,45,140Q57,107,83.5,83.5Q110,60,141,45.5Q172,31,206,19.5Q240,8,275,16Q310,24,343.5,38Q377,52,403,77.5Q429,103,439,137.5Q449,172,461.5,206Q474,240,467,275.5Z" />
                            </clipPath>
                        </defs>
                        <image x="0" y="0" width="100%" height="94%" clip-path="url(#blob)"
                            xlink:href="{{ asset('images/photo_2023-07-04_18-49-29.jpg') }}"
                            preserveAspectRatio="xMidYMid slice"></image>
                    </svg>
                </div>
            </div>

            <div class="col-12 col-md-6 d-flex flex-column align-items-start my-md-0 my-5">
                <div class="biography my-3">
                    <h1 class="my-3">{{ __('general.About_me') }}</h1>
                    <h3>{{ __('general.Full_stack') }}</h3>
                    <p class="my-3">{{ __('general.Full_stack_description') }}</p>
                </div>
                <div>
                    <div class="my-3 d-md-block d-sm-none">
                        <a href="/contact" class="hire-me text-dark btn btn-danger py-3 px-4 text-white">
                            <i class="bi bi-telephone-fill bg-white p-2 text-dark mx-1"></i>
                            {{ __('general.Hire_me') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
