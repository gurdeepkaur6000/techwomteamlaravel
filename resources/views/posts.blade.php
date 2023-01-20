@extends('layout')
  
@section('content')

<div class="container">
    <div class="row justify-content-center">
        @include('sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Posts') }}<a href="{{ url('add-post') }}" class="btn btn-danger float-end">Add Post</a>
                </div>
  
                <div class="card-body">
                    <table border='1' style='border-collapse: collapse;'>
                      <tr>
                        <th>Username</th>
                        <th>Name</th>
                      </tr>
                      @foreach($postData as $postDataResult)
                      <tr>
                        <td>{{ $postDataResult->title }}</td>
                        <td>{{ $postDataResult->description }}</td>
                        <td><a href="{{ url('edit-post') }}/{{ $postDataResult->id }}" class="btn btn-success float-end">Edit</a></td>
                      </tr>
                      @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection