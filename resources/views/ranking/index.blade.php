@extends('master')

@section('main')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li><a href="/ranking">Ranking</a></li>
            </ol>
            <h2>Ranking</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <section id="ranking" class="ranking">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="filters">
                    <li data-filter="*" class="filter-active">Models</li>
                    <li data-filter=".filter-app">Agencies</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
