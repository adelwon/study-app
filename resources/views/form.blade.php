<?php /** @var App\Models\User  $user */?>
@extends('layout')

@section('title', isset($user)?'Edit user: '.$user->name : 'Create user')

@section('content')
    <a href="{{route('users.index')}}">Go back</a>
    <form class="my-3" method="POST"
          @if(isset($user))
          action="{{route('users.update', $user)}}"
          @else
          action="{{route('users.store')}}"
        @endif
    >
        @csrf
        @isset($user)
            @method('PUT')
        @endisset
        <div class="row">
            <div class="col">
                <input name="name"
                       value="{{ isset($user) ? $user->name : null }}"
                       type="text" class="form-control" placeholder="Full name" aria-label="Full name">
            </div>
            <div class="col">
                <input name="email"
                       value="{{ isset($user) ? $user->email : null }}"
                       type="text" class="form-control" placeholder="E-mail" aria-label="E-mail">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
