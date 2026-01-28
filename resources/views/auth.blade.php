@extends('layouts.app')

@section('title', 'content')

@section('header')
    <h1>Ini Auth</h1>
@endsection

@section('content')
    <form method="POST" action="{{ route('htua.submit') }}">
        @csrf

        <ul style="display: flex; flex-direction: column;width: 25%;gap: 10%">
            <input type="text" name="nama" placeholder="Berikan Username anda" value="{{ old('nama') }}">
            <input type="email" name="email" placeholder="Berikan Email anda" value="{{ old('email') }}">
            <input type="password" name="password" placeholder="Berikan Password anda" value="{{ 'password' }}">
            
            <button type="submit">KirimKan</button>
        </ul>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="background-color: red">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif

        @if (session('bis'))
            <div style="background-color: lightseagreen">
                {{ session('bis') }}
            </div>
        @endif

    </form>
@endsection