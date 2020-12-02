@extends('layouts.web')
@section('head::title', 'Home')

@section('app')
    Ultimo articolo: {{$lastArticle->title}} by
    {{$lastArticle->author->name}}
@endsection
