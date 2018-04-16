@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                From the Firehose
            </h3>

            <div class="blog-post">
                <h2 class="blog-post-title">Create a Post</h2>

                <hr>

                <form method="POST" action="/posts">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Body</label>
                        <textarea id="body" name="body" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>

                    @include('layouts.errors')
                    
                </form>


            </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        @include('layouts.sidebar')

    </div><!-- /.row -->
@endsection