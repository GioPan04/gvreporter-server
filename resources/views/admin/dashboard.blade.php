@extends('layouts.web')
@section('head::title', 'Dashboard')

@section('app')
    <h1>Dashboard</h1>
    <span>Attualmente sei loggato come: {{Auth::user()->name}}, non sei te? <a href="{{route('admin::logout')}}">Esci</a></span><br>
    Ultimi articoli:
    <ul>
        @foreach($articles as $article)
            <li>{{$article->title}} by {{$article->author->name}}</li>
        @endforeach
        <li><a href="{{route('admin::newarticle')}}">Crea nuovo</a></li>
    </ul>
@endsection
