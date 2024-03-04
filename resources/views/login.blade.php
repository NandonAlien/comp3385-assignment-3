@extends('layouts.app')

@section('content')
<h1>Login</h1>
<form action = {{ url('/login')}} method="post" >
@csrf
    <div>
        <label for='email'>Email</label><br>
        <input type="text" id="email" name="email">
    </div>
    <div>
        <label for='password'>Password</label><br>
        <input type="text" id="password" name="password">
    </div>
    <button type="submit">Login</button>
</form>
@endsection