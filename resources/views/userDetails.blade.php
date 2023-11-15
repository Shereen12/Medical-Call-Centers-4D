@extends('layout.app')
@section('content')

<div class="user">
    <h4>{{$user->name}}</h4>
    <span>{{$user->email}}</span>
    <span>{{$user->dateofbirth}}</span>
</div>
@endsection