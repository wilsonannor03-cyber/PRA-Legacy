@extends('components.layouts.app')


@section('content')
<h1>Contact</h1>
@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form method="POST" action="{{ route('contact.submit') }}">
    @csrf
    <label>Naam:</label>
    <input type="text" name="name"><br>

    <label>E-mail:</label>
    <input type="email" name="email"><br>

    <label>Bericht:</label>
    <textarea name="message"></textarea><br>

    <button type="submit">Versturen</button>
</form>
@endsection
