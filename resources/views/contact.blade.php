<?php
App::setLocale(session('locale'));
?>
@extends('layout.master')
@section('title', 'contact')

@section('main-content')


    <div class="container my-5" dir="{{ session('locale') == 'fa' ? 'rtl' : 'ltr' }}">
        @extends('layout.messages')
        <h1 class="title-contact-page text-white text-center">{{ __('general.Contact_Us') }} <span
                class="text-danger">{{ __('general.Me') }}</span></h1>
        <div class="row flex-md-row flex-column-reverse align-items-baseline  my-5">
            <div class="col-12 col-md-5 d-flex flex-column align-items-md-start align-items-center">
                <div>
                    <h3 class="text-white mb-3">{{ __('general.Get_In_Touch') }}</h3>
                    <p class="contact-info-text p-1">{{ __('general.Contact_description') }}</p>
                </div>
                <div class="d-flex flex-column align-items-md-start align-items-start my-4">
                    <div class="d-flex mb-3">
                        <i class="icon-info bi bi-geo-alt-fill mx-1"></i>
                        <div class="d-flex flex-row mx-1 align-items-md-center align-items-baseline">
                            <span class="text-white fs-5 mx-2">{{ __('general.Address') }}</span>
                            <span class="span-info">{{ __('general.Location') }}</span>
                        </div>
                    </div>
                    <div class="d-flex  mb-3">
                        <i class="icon-info bi bi-envelope-plus mx-1"></i>
                        <div class="d-flex align-items-center mx-1">
                            <span class="text-white fs-5 mx-2">{{ __('general.Email') }}</span>
                            <span class="span-info"> {{ __('general.My_Email') }}</span>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="icon-info bi bi-telephone-fill p-1 mx-1"></i>
                        <div class="d-flex flex-row  mx-1 align-items-md-center align-items-baseline">
                            <span class="text-white fs-5 mx-2">{{ __('general.Phone_Number') }}</span>
                            <span class="span-info">{{ __('general.My_Phone_Number') }}</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-4">
                    <a href="https://t.me/shahrokhdev" target="_blank">
                        <div class="social-icon mx-2 fs-5 p-2 rounded-circle"><i class="bi bi-telegram"></i></div>
                    </a>
                    <a href="https://www.instagram.com/shahrokh_gh_82/" target="_blank">
                        <div class="social-icon mx-2 fs-5 p-2 rounded-circle"><i class="bi bi-instagram"></i></div>
                    </a>

                    <a href="https://github.com/shahrokhdev" target="_blank">
                        <div class="social-icon mx-2 fs-5 p-2 rounded-circle"><i class="bi bi-github"></i></div>
                    </a>

                </div>
                <div class="text-white p-3">
                    <h6 id="tooltipText"></h6>
                </div>
            </div>

            <div class="col-12 col-md-7 d-flex flex-column align-items-center">
                <form method="POST" action="{{ route('storeContact') }}">
                    @csrf
                    <div>
                        <div class="d-flex flex-md-row flex-column mb-md-2 mb-0">
                            <input type="text"
                                class="form-control input-contact bg-dark text-white px-3 py-2 mx-2 mb-md-2 mb-3"
                                id="name" name="name" placeholder="{{ __('general.Your_Name') }}"
                                value="{{ old('name') }}">
                            <input type="text"
                                class="form-control input-contact bg-dark text-white px-3 py-2  mx-2 mb-md-2 mb-3"
                                id="phoneNumber" name="phoneNumber" placeholder="{{ __('general.Your_Number') }}"
                                value="{{ old('phoneNumber') }}">
                        </div>
                        <div class="d-flex flex-md-row flex-column mb-md-2 mb-0">
                            <input type="email"
                                class="form-control input-contact bg-dark text-white px-3 py-2 mx-2 mb-md-2 mb-3"
                                id="email" placeholder="{{ __('general.Your_Email') }}" name="email"
                                value="{{ old('email') }}">
                            <input type="text"
                                class="form-control input-contact bg-dark text-white px-3 py-2 mx-2 mb-md-2 mb-3"
                                id="subject" placeholder="{{ __('general.Your_Subject') }}" name="subject"
                                value="{{ old('subject') }}">
                        </div>
                        <div>
                            <textarea placeholder="{{ __('general.Your_Message') }}" name="message"
                                class="form-control input-contact bg-dark text-white px-3 py-2 mx-2" id="message" cols="30" rows="10">{{ old('message') }}</textarea>
                        </div>
                    </div>
                    <div class="mt-3 mb-5">
                        <button type="submit"
                            class="btn btn-sub text-white px-5 py-2">{{ __('general.Send_Message') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
