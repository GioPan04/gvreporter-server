@extends('layouts.web')
@section('head::title', 'Nuovo articolo')

@section('app')
    <form action="{{route('admin::newarticle')}}" method="POST">
        @csrf
        <input class="input" type="text" name="title" placeholder="Titolo articolo">
        <input type="submit" value="CREA">
    </form>
@endsection
