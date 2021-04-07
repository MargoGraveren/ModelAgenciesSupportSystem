@extends('master')

@section('main')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Home</a></li>
                <li><a href="/profile/{{ Auth::user()->id }}">Profile</a></li>
                <li><a href="/settings">Settings</a></li>

            </ol>
            <h2>Settings</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="settings" class="settings">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar">
                        <hr>
                        <h3 class="sidebar-title">General</h3>
                        <hr>
                        <h6><a href="#">Account Informations</a></h6>
                        <hr>
                        <h3 class="sidebar-title">Security</h3>
                        <hr>
                        <h6><a href="#">Change Password</a></h6>
                        <h6><a href="#">Login Activity</a></h6>
                        <hr>
                        <h3 class="sidebar-title">Privacy</h3>
                        <hr>
                        <h6><a href="#">Blocked Users</a></h6>
                        <h6><a href="#">Privacy Politics</a></h6>
                        <hr>
                </div>
            </div>
        </div>
    </section>

@endsection
