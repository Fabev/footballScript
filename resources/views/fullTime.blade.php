@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <form method="post" action="{{route('generate')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="type" value="full-time">
            <label>
                Home
                <input type="number" name="home" class="form-control">
            </label>
            <br/>
            <label>
                Away
                <input type="number" name="away" class="form-control">
            </label>
            <br/>
            <input type="submit" class="btn btn-primary" value="Genera">
        </form>
    </div>
@endsection
