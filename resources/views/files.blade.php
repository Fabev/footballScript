@extends('layouts.app')

@section('content')
    <div class="container text-center files-upload">
        <form method="post" action="{{route('upload')}}" enctype="multipart/form-data">
            @csrf
            <h3>Divisa home</h3>
            <br/>
            <div>
                <h5>Half time</h5>
                <label>
                    Post
                    <br/>
                    <figure style="background-image: url('{{asset('storage/img/home_half_time_post.png')}}?{{now()}}')"></figure>
                    <input type="file" name="home_half_time_post" />
                </label>
                <label>
                    Story
                    <br/>
                    <figure style="background-image: url('{{asset('storage/img/home_half_time_story.png')}}?{{now()}}')"></figure>
                    <input type="file" name="home_half_time_story" />
                </label>
            </div>
            <br/>
            <div>
                <h5>Full time</h5>
                <label>
                    Post
                    <br/>
                    <figure style="background-image: url('{{asset('storage/img/home_full_time_post.png')}}?{{now()}}')"></figure>
                    <input type="file" name="home_full_time_post" />
                </label>
                <label>
                    Story
                    <br/>
                    <figure style="background-image: url('{{asset('storage/img/home_full_time_story.png')}}?{{now()}}')"></figure>
                    <input type="file" name="home_full_time_story" />
                </label>
            </div>
            <br/>
            <br/>
            <br/>
            <h3>Divisa away</h3>
            <br/>
            <div>
                <h5>Half time</h5>
                <label>
                    Post
                    <br/>
                    <figure style="background-image: url('{{asset('storage/img/away_half_time_post.png')}}?{{now()}}')"></figure>
                    <input type="file" name="away_half_time_post" />
                </label>
                <label>
                    Story
                    <br/>
                    <figure style="background-image: url('{{asset('storage/img/away_half_time_story.png')}}?{{now()}}')"></figure>
                    <input type="file" name="away_half_time_story" />
                </label>
            </div>
            <br/>
            <div>
                <h5>Full time</h5>
                <label>
                    Post
                    <br/>
                    <figure style="background-image: url('{{asset('storage/img/away_full_time_post.png')}}?{{now()}}')"></figure>
                    <input type="file" name="away_full_time_post" />
                </label>
                <label>
                    Story
                    <br/>
                    <figure style="background-image: url('{{asset('storage/img/away_full_time_story.png')}}?{{now()}}')"></figure>
                    <input type="file" name="away_full_time_story" />
                </label>
            </div>
            <br/>
            <input type="submit" class="btn btn-primary" value="Carica">
        </form>
        <br/>
        <a href="{{route('dashboard')}}" class="btn btn-light">Indietro</a>
    </div>
@endsection
