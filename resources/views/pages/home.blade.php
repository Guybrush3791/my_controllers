@extends('layouts.main-layout')

@section('content')
    <h1>DEGREES</h1>
    <div id="test">
        <ul>
            @foreach ($degrees as $degree)
                <li>{{ $degree -> name }} - {{ $degree -> level }}</li>
            @endforeach
        </ul>
    </div>
@endsection