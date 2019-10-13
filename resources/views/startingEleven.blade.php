@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <form method="post" action="{{route('generate')}}">
            @csrf
            <input type="hidden" name="type" value="starting_eleven">
            TITOLARI:
            @for($i=0; $i<11; $i++)
                <select name="lineup[{{$i}}]" class="form-control">
                    @foreach($players as $player)
                        <option value="{{$player}}">{{strtoupper(str_replace('-', ' ', $player))}}</option>
                    @endforeach
                </select>
                <br/>
            @endfor
            <div class="bench">
                SUBS
                @for($i=0; $i<9; $i++)
                    <select name="bench[{{$i}}]" class="form-control">
                        @foreach($players as $player)
                            <option value="{{$player}}">{{strtoupper(str_replace('-', ' ', $player))}}</option>
                        @endforeach
                    </select>
                    <br/>
                @endfor
            </div>
            <br>
            <input type="submit" value="Genera" class="btn btn-primary m-auto">
        </form>
    </div>
@endsection
