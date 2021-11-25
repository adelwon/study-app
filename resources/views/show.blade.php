@extends('layout')

@section('title', 'User: '. $user->name)

@section('content')
    <a href="{{route('users.index')}}">Go back</a>
    <div class="card my-3">
        <h5 class="card-header">User card id: #{{$user->id}}</h5>
        <div class="card-body">
            <h5 class="card-title">{{$user->name}}</h5>
            <p class="card-text">
                {{$user->email}}<br>
                Create: {{$user->created_at->format('d/m/y H:i:s')}}<br>
                Edit: {{$user->updated_at->format('d/m/y H:i:s')}}
            </p>
            <a href="{{route('users.edit', $user)}}" class="btn btn-primary">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
        </div>
    </div>
@endsection
