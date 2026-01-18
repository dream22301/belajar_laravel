@extends('layouts.app')

@section('title', 'content')

@section('header')
    <h1>test</h1>
@endsection

@section('content')
    <h2>Selamat datang</h2>
    <p>Ini adalah layout</p>
    <ul>
        @foreach ($aray as $ray => $ay) 
            <li>
                orang bernama {{ $ray }} mempunyai uang sebanyak {{ $ay }}
            </li>
        @endforeach
    </ul>
@endsection