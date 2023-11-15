@extends('layout.app')
@section('content')
<h4>Create New User</h4>
<form>
    <input type="hidden" id="_token" name="_token" value="{{ csrf_token()}}">
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
    <div>
        <button class="button" onclick="login()" id="loginButton">Submit</button>
    </div>

    <div>
        <p id="message"></p>
    </div>
</form>
@endsection