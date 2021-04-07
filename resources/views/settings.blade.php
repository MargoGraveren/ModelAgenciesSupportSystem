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


@endsection
