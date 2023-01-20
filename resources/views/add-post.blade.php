@extends('layout')
  
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add Post
                        <a href="{{ url('posts') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('create-post') }}" method="POST">
                        @csrf
                        @method('POST')

                        <div class="form-group mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" value="" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Description</label>
                            <textarea type="text" name="description" class="form-control"></textarea>
                        </div>
                        
                        
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Add Post</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection