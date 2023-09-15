@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <form method="post" action="{{route('generate')}}" enctype="multipart/form-data">
            @csrf
            <label>
                Tipo
                <select name="type" class="form-control">
                    <option value="half-time" selected>Half time</option>
                    <option value="full-time">Full time</option>
                </select>
            </label>
            <br/>
            <label>
                Divisa
                <select name="kit" class="form-control">
                    <option value="home" selected>Home</option>
                    <option value="away">Away</option>
                </select>
            </label>
            <br/>
            <label>
                Risultato squadra casa
                <input type="number" name="home" class="form-control">
            </label>
            <br/>
            <label>
                Risultato squadra ospite
                <input type="number" name="away" class="form-control">
            </label>
            <br/>
            <input type="submit" class="btn btn-primary" value="Genera">
        </form>
        <br/>
        <br/>
        <a href="{{route('files')}}" class="btn btn-warning">Modifica files</a>
    </div>
@endsection
