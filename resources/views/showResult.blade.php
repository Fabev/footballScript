@extends('layouts.app')

@section('content')
    <div class="container text-center">
        @foreach($results as $result)
            <img src="{{asset($result)}}" class="img-fluid m-2">
        @endforeach
    </div>
@endsection
