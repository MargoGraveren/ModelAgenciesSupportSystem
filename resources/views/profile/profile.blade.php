@extends('master')

@section('main')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Home</a></li>
                <li><a href="/profile/{{ Auth::user()->id }}">Profile</a></li>
            </ol>
            <h2>Profile</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Profile Section ======= -->
    <section id="profile" class="profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar">
                        <h3 class="sidebar-title">{{ Auth::user()->name }}</h3>
                        <hr>
                        <div class="profile-img">
                            <img src="{{ asset('assets/img/blog-1.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <hr>
                        <div class="info">
                            <p>
                                szczegóły
                            </p>
                            <p>
                                szczegóły
                            </p>
                            <p>
                                szczegóły
                            </p>
                            <p>
                                szczegóły
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 profile-content">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="filters">
                                <li data-filter="*" class="filter-active">Gallery</li>
                                <li data-filter=".filter-app">Campaigns</li>
                                <li data-filter=".filter-card">Details</li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        @include('profile.portfolio')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
