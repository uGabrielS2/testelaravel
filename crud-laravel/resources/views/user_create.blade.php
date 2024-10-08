@extends('master')

@section('content')


<h2>CREATE</h2>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="primeiro_nome" placeholder="your first name">
    <input type="text" name="sobrenome" placeholder="your last name">
    <button type="submit">UPDATE</button>
    </form>


@endsection