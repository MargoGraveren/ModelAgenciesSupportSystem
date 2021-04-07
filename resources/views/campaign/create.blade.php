@extends('master')


@section('main')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li><a href="/campaign">Campaigns</a></li>
                <li><a href="/campaign">Create Campaign</a></li>
            </ol>
            <h2>Create Campaigns</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Create Campaign Form ======= -->
    <section id="create_campaign" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Agency</h2>
                <h3>Create New <span>Campaign</span></h3>
            </div>
        </div>

        <div class="offset-lg-4 col-lg-4">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')"/>

            <form method="POST" action="{{ url('campaign') }}" class="php-form">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="title" id="title"
                           placeholder="Title" data-rule="text"
                           data-msg="Please enter a valid title"/>
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="description" id="description" placeholder="Description"
                              data-msg="Please enter a valid password" rows="10"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option>Category #1</option>
                        <option>Category #2</option>
                        <option>Category #3</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit">Create</button>
                </div>
            </form>
        </div>
    </section>
@endsection
