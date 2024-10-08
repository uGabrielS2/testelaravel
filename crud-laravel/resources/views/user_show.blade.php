@extends('master')

@section('content')

<h2>SHOW DETAILS</h2>

<ul>
    <li>Primeiro nome: {{ $user->primeiro_nome }}</li>
    <li>Sobrenome: {{ $user->sobrenome }}</li>

</ul>

<form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">DELETE</button>
</form>

<a href="{{ route('users.index') }}">Back to List</a>

@endsection
