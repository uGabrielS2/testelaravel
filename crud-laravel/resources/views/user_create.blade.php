@extends('master')

@section('content')

<h2>Edit</h2>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="primeiro_nome"  placeholder="seu primeiro nome" value="anana">
    <input type="text" name="sobrenome"  placeholder="seu sobrenome" value="nasdas">
    <button type="submit">CREATE</button>
</form>


@endsection