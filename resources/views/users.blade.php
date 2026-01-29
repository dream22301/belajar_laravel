@extends('layouts.app')

@section('title', 'content')

@section('header')
    <h1>Users</h1>
@endsection

@section('content')
    <ul>
        @foreach ($users as $us)
            <li>
                {{ $us->nama }} - {{ $us->email }} - {{ $us->password }}
            </li>
        @endforeach
    </ul>
@endsection