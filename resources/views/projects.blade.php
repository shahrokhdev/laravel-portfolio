<?php
use App\Models\Project;
App::setLocale(session('locale'));
?>
@extends('layout.master')
@section('title', 'projects')

@section('main-content')

    <div class="container mt-5">
        <div class="row d-flex justify-content-center p-1 mt-5">
            @if (count(Project::all()) == 0)
            <div class="mt-5">
                 <h2 class="text-center">{{__('general.Coming')}}</h2>
            </div>
            @else
                @foreach (Project::all() as $project)
                    <div class="projects-info-box col-12 col-md-3 mb-4 mx-2">
                        <div class="hidden-box text-light bg-dark about-project rounded d-flex flex-column p-3 text-center">
                            <div class="title my-3">
                                <h3>{{ $project->title }}</h3>
                            </div>
                            <div class="description mt-3">
                                <p class="fs-5">{{ $project->description }}</p>
                            </div>
                        </div>
                        <div class="main-box d-flex banner-box">
                            <img class="project-banner w-100 rounded" src="{{ $project->project_image }}" alt="">
                        </div>
                    </div>
                @endforeach
            @endif
            {{--  --}}
        </div>
    </div>

@endsection
