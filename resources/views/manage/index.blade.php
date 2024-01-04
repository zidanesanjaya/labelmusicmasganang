@extends('layouts.admin.app')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#about">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="services-tab" data-bs-toggle="tab" href="#services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="artist-tab" data-bs-toggle="tab" href="#artist">Artist</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact-us">Contact Us</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        @include('manage.pages.home')
                        @include('manage.pages.about')
                        @include('manage.pages.services')
                        @include('manage.pages.contact')
                        @include('manage.pages.artist')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
