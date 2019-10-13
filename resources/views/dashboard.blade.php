@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <a href="{{route('halfTime')}}" class="btn btn-primary m-2">Half Time</a>
        <br>
        <a href="{{route('fullTime')}}" class="btn btn-primary m-2">Full Time</a>
        <br>
        <a href="{{route('startingEleven')}}" class="btn btn-primary m-2">Starting XI</a>
    </div>
@endsection
