@extends('layouts.web')
@section('head::title', $article->title)

@section('app')
    @markdown($article->content())
@endsection
