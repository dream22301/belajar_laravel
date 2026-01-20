@extends('layouts.app')

@section('title', 'form')

@section('header')
    <h1>Ini Form</h1>
@endsection

@section('content')
    <h2>Forom</h2>

    <form method="POST" action="{{ route('form.submit') }}">
        @csrf
    
        <input type="text" name="nama" placeholder="Kasih Nama">
        <button type="kasih">send</button>
    </form>
@endsection