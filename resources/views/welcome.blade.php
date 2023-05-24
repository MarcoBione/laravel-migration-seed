@extends('layouts.app')

@section('maincontent')
    <main>
        <h1>mainpage</h1>
        <ul>
            @foreach ($houses as $house)
                <li>{{ $house->title }}</li>
            @endforeach
        </ul>
    </main>
@endsection
