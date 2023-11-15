@extends('layout.app')
@section('content')
<h4>Create New User</h4>
<form>
    <input type="hidden" id="_token" name="_token" value="{{ csrf_token()}}">
    <div class="form-item">
        <label>Name: </label>
        <input id="name" type="text"/>
        <p id="P_name" class="error"></p>
    </div>
    <div class="form-item">
        <label>E-mail: </label>
        <input id="email"type="text"/>
        <p id="P_email" class="error"></p>

    </div>
    <div class="form-item">
        <label>Password: </label>
        <input id="password" type="password"/>
        <p id="P_password" class="error"></p>

    </div>
    <div class="form-item">
        <label>Date of birth: </label>
        <input id="date-of-birth"type="date"/>
        <p id="P_dateofbirth" class="error"></p>
    </div>
    <div>
        <button class="button" onclick="create()" id="createUserButton">Submit</button>
    </div>
</form>

<div id="allusers">
    @foreach ($users as $user)
        <a href="user/{{$user->id}}">{{$user->name}}</a>
    @endforeach
</div>
@endsection