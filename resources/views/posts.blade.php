@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Posts') }}</div>
  
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
                      </tr>
                      @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection