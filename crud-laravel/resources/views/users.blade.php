@extends('master')

@section('content')

<a href="{{ route('users.create') }}">CREATE</a>

<hr>

<h2>Users</h2>
<ul>
    @foreach ($users as $user)
    <li>{{ $user->primeiro_nome }} | <a href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a> | <a href="{{ route('users.show', ['user' => $user->id]) }}">SHOW</a></li>
   @endforeach
</ul>

@endsection
