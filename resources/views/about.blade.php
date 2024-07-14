<?php
use App\Models\Skill;
use App\Models\Resume;
use App\Models\Education;
App::setLocale(session('locale'));

$resume = Resume::all();

$educations = Education::all();

?>
@extends('layout.master')
@section('title', 'about')

@section('main-content')

    {{-- {{ $resume }} --}}
    <div class="container">
        {{-- title --}}

        <h1 class="title-about-page text-center text-white my-5"> {{ __('general.ABOUT') }} <span
                class="text-danger">{{ __('general.Me') }}</span></h1>

        {{-- personal info --}}
        <div class="row d-flex flex-md-row flex-column justify-content-between align-items-md-center align-items-baseline mt-5"
            dir="{{ session('locale') == 'fa' ? 'rtl' : 'ltr' }}">
            <div class="col-12 col-md-7 d-flex flex-column">
                <div>
                    <h3 class="title-info text-white mb-3">{{ __('general.Personal_Info') }}</h3>
                </div>
                <div class="about-main-box d-flex flex-md-row flex-column align-items-baseline">

                    <div class="d-flex flex-column align-items-start mt-4">
                        <div class="d-flex justify-content-center mb-3">
                            <div class="d-flex mx-1 align-items-baseline">
                                <span class="text-white fs-5 mx-md-2 mx-md-2">{{ __('general.Name') }}</span>
                                <span
                                    class="span-info">{{ session('locale') == 'fa' ? $resume[0]->fullname_fa : $resume[0]->fullname }}</span>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="d-flex flex-row mx-1 align-items-md-center align-items-baseline">
                                <span class="text-white fs-5 mx-md-2 mx-0">{{ __('general.Age') }}</span>
                                <span class="span-info">{{ __('general.Age_Value') }}</span>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="d-flex flex-row mx-1 align-items-md-center align-items-baseline">
                                <span class="text-white fs-5 mx-md-2 mx-0">{{ __('general.Email') }}</span>
                                <span class="span-info">{{ __('general.My_Email') }}</span>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="d-flex flex-row  mx-1 align-items-md-center align-items-baseline">
                                <span class="text-white fs-5 mx-md-2 mx-0">{{ __('general.Address') }} </span>
                                <span
                                    class="span-info">{{ session('locale') == 'fa' ? $resume[0]->address_fa : $resume[0]->address }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column align-items-start w-100">
                        <div class="d-flex justify-content-center mb-3">
                            <div class="d-flex flex-row  mx-1 align-items-md-center align-items-baseline">
                                <span class="text-white fs-5 mx-md-2 mx-0">{{ __('general.Freelance') }} </span>
                                <span
                                    class="span-info">{{ session('locale') == 'fa' ? $resume[0]->freelance_fa : $resume[0]->freelance }}</span>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="d-flex flex-row  mx-1 align-items-md-center align-items-baseline">
                                <span class="text-white fs-5 mx-md-2 mx-0">{{ __('general.Skill') }} </span>
                                <span class="span-info">
                                    {{ session('locale') == 'fa' ? $resume[0]->skills_fa : $resume[0]->skills }}</span>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="d-flex flex-row  mx-1 align-items-md-center align-items-baseline">
                                <span class="text-white fs-5 mx-md-2 mx-0">{{ __('general.Experience') }} </span>
                                <span
                                    class="span-info">{{ session('locale') == 'fa' ? $resume[0]->experience_fa : $resume[0]->experience }}</span>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="d-flex flex-row mx-1 align-items-md-center align-items-baseline">
                                <span class="text-white fs-5 mx-md-2 mx-0">{{ __('general.Language') }} </span>
                                <span
                                    class="span-info">{{ session('locale') == 'fa' ? $resume[0]->languages_fa : $resume[0]->languages }}</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 col-md-5 mt-5">
                <div class="d-flex flex-column statistics-project text-center">
                    <div class="d-flex flex-md-row justify-content-md-around flex-column">
                        <div class="bg-dark mx-1 p-3 w-md-25 w-100 rounded my-2 my-md-1 ">
                            <h1 class="font-weight-bold">{{ __('general.Value_Years_Of_Experience+') }}</h1>
                            <p class="text-white">{{ __('general.Years_Of_Experience') }} </p>
                        </div>

                        <div class="bg-dark p-3 w-md-25 w-100 rounded  my-2 my-md-1">
                            <h1 class="font-weight-bold">{{ __('general.Value_Happy_Clients') }}</h1>
                            <p class="text-white">{{ __('general.Happy_Clients') }} </p>
                        </div>
                    </div>

                    <div class="d-flex flex-md-row justify-content-md-around flex-column">
                        <div class="bg-dark mx-1 p-3 w-md-25 w-100 rounded  my-2 my-md-1 ">
                            <h1 class="font-weight-bold">{{ __('general.Value_Project_Completed') }} </h1>
                            <p class="text-white">{{ __('general.Project_Completed') }} </p>
                        </div>

                        <div class="bg-dark p-3 w-md-25 w-100 rounded my-2 my-md-1 ">
                            <h1 class="font-weight-bold">{{ __('general.Value_Awards_Won') }}</h1>
                            <p class="text-white">{{ __('general.Awards_Won') }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- show all programming languages --}}
        <div class="row d-flex justify-content-center mt-5" dir="{{ session('locale') == 'fa' ? 'rtl' : 'ltr' }}">
            @if (session('locale') == 'fa')
                <h1 class="text-skills text-center text-white my-5">{{ __('general.Skills') }} <span
                        class="text-danger">{{ __('general.My') }}</span></h1>
            @else
                <h1 class="text-skills text-center text-white my-5"> {{ __('general.My') }} <span
                        class="text-danger">{{ __('general.Skills') }}</span></h1>
            @endif

            @foreach (Skill::all() as $skill)
                <div
                    class="box-language col-12 col-md-3  d-flex flex-column justify-content-around align-items-center rounded bg-dark mx-2 my-4 px-4 py-1">
                    <div class="header-part my-1 d-flex justify-content-center">
                        <img class="rounded w-md-75 w-50" src="{{ $skill->icon }}" alt="">
                    </div>
                    <div class="main-part d-flex justify-content-center">
                        <p class="text-white text-center">{{ $skill->name }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        {{--  end show all programming languages --}}

        <div class="row mt-5 d-flex justify-content-center" style="margin-bottom: 5rem">
            @if (session('locale') == 'fa')
                <h1 class="text-education text-center text-white my-5"> {{ __('general.Experience') }}<span
                        class="text-danger">
                        {{ __('general.My') }} </span></h1>
            @else
                <h1 class="text-education text-center text-white my-5"> {{ __('general.My') }}<span class="text-danger">
                        {{ __('general.Experience') }}</span></h1>
            @endif
            @foreach ($educations as $education)
                <div class="main-education-part col-12 col-md-5 mx-3 pb-5">
                    <div class="d-flex">
                        <div class="box-icon-education">
                            <i class="bi bi-mortarboard-fill rounded-circle p-2"></i>
                        </div>
                        <p class="date bg-dark text-white rounded p-2">
                            {{ $education->start_date }}-{{ $education->end_date }}</p>
                    </div>

                    <div class="text-white px-3 d-flex flex-column justify-content-between"
                        dir="{{ session('locale') == 'fa' ? 'rtl' : 'ltr' }}">
                        <h3> {{ session('locale') == 'fa' ? $education->title_fa : $education->title }}</h3>
                        <p class="details-paragraph my-3">
                            {{ session('locale') == 'fa' ? $education->description_fa : $education->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
