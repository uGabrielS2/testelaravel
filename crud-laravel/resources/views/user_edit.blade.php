@extends('master')

@section('content')

<h2>Edit</h2>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="primeiro_nome" value="{{ $user->primeiro_nome }}">
    <input type="text" name="sobrenome" value="{{ $user->sobrenome }}">
    <button type="submit">UPDATE</button>
</form>


@endsection