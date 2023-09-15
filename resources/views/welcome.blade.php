@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="flex-center position-ref full-height">
            <div class="content text-center">
                <img src="{{asset('img/logo.png')}}" class="m-auto logo">
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <label>
                        Password
                        <input type="password" name="password" class="form-control" placeholder="Inserire password">
                    </label>
                    <br/>
                    <input type="submit" class="btn btn-primary" value="Entra">
                </form>
            </div>
        </div>
    </div>
@endsection
