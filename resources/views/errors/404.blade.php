@extends('layouts.web')
@section('head::title', 'Errore 404')

@section('app')
    Errore 404 😵<br>
    Puoi ritrovare la strada andando all'<a href="{{route('home')}}">homepage</a>
@stop
