@extends('layouts.web')
@section('head::title', 'Nuovo articolo')

@section('app')
    <h1>Nuovo articolo</h1>
    <form action="{{route('admin::newarticle')}}" method="POST">
        @csrf
        <input class="input" type="text" name="title" placeholder="Titolo articolo"><br>
        <label for="publishdate">Data di pubblicazione</label>
        <input id="publishdate" type="date" name="publish_date"><br>
        <label for="publishtime">Ora di pubblicazione</label>
        <input id="publishtime" type="time" name="publish_time"><br>
        <textarea name="article" id="article" cols="30" rows="10"></textarea>
        <input type="submit" value="CREA">
    </form>
@endsection
