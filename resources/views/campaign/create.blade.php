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
            <h2>Create Campaign</h2>
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

            <form method="POST" action="{{ url('campaign') }}" class="php-form" enctype="multipart/form-data">
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
                    <select class="form-control" id="category" name="category">
                        @foreach($categories as $category)
                            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="date" id="date"
                           placeholder="Date" data-rule="date"
                           data-msg="Please enter a valid date"/>
                    <div class="validate"></div>
                </div>
                <div class="file-input">
                    <input type="file" id="file" class="file" name="file" accept="image/png, image/jpeg">
                    <label for="file">
                        Select file
                    </label>
                    <p id="filelist" class="file-name" ></p>
                </div>
                <div class="text-center">
                    <button type="submit">Create</button>
                </div>
            </form>
        </div>
    </section>
@endsection
