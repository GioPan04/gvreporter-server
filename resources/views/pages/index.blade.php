@extends('layouts.web')
@section('head::title', 'Home')

@section('app')
    Ultimo articolo: <a href="{{route('articles::show', ['id' => $lastArticle->id])}}">{{$lastArticle->title}}</a> by {{$lastArticle->author->name}}
@endsection
