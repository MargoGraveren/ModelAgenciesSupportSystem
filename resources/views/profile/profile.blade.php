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
                        <div class="profile-img">
                            <img src="{{ asset('assets/img/blog-1.jpg') }}" alt="" class="img-fluid">
                        </div>
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
                    <div class="pagination">
                        <ul class="justify-content-center">
                            <li><a href="#">gallery</a></li>
                            <li class="active"><a href="#">campaigns</a></li>
                            <li><a href="#">details</a></li>
                        </ul>
                    </div>
                    <div class="">
                        reszta
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
