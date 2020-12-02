@extends('layouts.web')
@section('head::title', 'Login')

@section('app')
    <h1>Login</h1>
    <span>Perfavore effettua il login per continuare {{Auth::check() ? 'Loggato' : 'non loggato'}}</span>
    <form method="POST" action="{{route('login')}}" class="form__login">
        @csrf
        <input type="username" placeholder="Username" name="username" spellcheck="false" value="{{old('username')}}"><br>
        <input type="password" placeholder="Password" name="password"><br>
        <input type="submit" value="LOGIN">
    </form>
@stop
