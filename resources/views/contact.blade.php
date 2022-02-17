@extends('master')
@section('title')
    Contact Page

@endsection

@section('body')
    <h1>City: {{$city}}</h1>
    <h2>Mobile: {{$mobile}}</h2>
    <p>Data: </p>
    @foreach($data as $dt)
        @if(is_array($dt))
            @foreach($dt as $key=>$d)
                <p>{{$key}}: {{$d}}</p>

            @endforeach
            <br />
            <hr />
        @else
        <p>Outer: {{$dt}}</p>
        @endif
    @endforeach


@endsection
