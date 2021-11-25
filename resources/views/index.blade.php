<?php /** @var App\Models\User  $users */?>
@extends('layout')
@section('title', 'Users')
@section('content')
    <a class="btn btn-secondary" href="{{route('users.create')}}" role="button">Create user</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td><a href="{{route('users.show', $user)}}">{{$user->name}}</a></td>
                <td><a href="{{route('users.show', $user)}}">{{$user->email}}</a></td>
                <td><a class="btn btn-primary" href="{{route('users.edit', $user)}}" role="button">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
@endsection
