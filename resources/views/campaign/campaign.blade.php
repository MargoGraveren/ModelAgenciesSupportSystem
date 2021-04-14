@extends('master')

@section('main')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="/campaign">Home</a></li>
                <li>Campaign Details</li>
            </ol>
            <h2>Campaign Details</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="portfolio-details-container">

                <div class="owl-carousel portfolio-details-carousel">
                    <img src="{{ asset('storage/'.$campaign->photo) }}" class="img-fluid" alt="">
                </div>

                <div class="portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                        <li><strong>Category</strong>: {{ $campaign->category }}</li>
                        <li><strong>Client</strong>: {{ $campaign->user->name }}</li>
                        <li><strong>Project date</strong>: {{ $campaign->closed_at }}</li>
                    </ul>
                </div>

            </div>

            <div class="portfolio-description">
                <h2>{{ $campaign->title }}</h2>
                <p>
                    {{ $campaign->description }}
                </p>
            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

@endsection
