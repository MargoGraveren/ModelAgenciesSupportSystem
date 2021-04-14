@extends('master')


@section('main')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li><a href="/campaign">Gallery</a></li>
                <li><a href="/campaign">Create Album</a></li>
            </ol>
            <h2>Create Album</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Create Album Form ======= -->
    <section id="create_album" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Gallery</h2>
                <h3>Create New <span>Album</span></h3>
            </div>
        </div>

        <div class="offset-lg-4 col-lg-4">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')"/>

            <form method="POST" action="#" class="php-form">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="title" id="title"
                           placeholder="Title" data-rule="text"
                           data-msg="Please enter a valid title"/>
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="description" id="description" placeholder="Description"
                              data-msg="Please enter a valid password" rows="5"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="file-input">
                    <input type="file" id="file" class="file" accept="image/png, image/jpeg" multiple="multiple">
                    <label for="file">
                        Select files
                    </label>
                    <p id="filelist" class="file-name"></p>
                </div>
                <div class="text-center">
                    <button type="submit">Create</button>
                </div>
            </form>
        </div>
    </section>
@endsection
