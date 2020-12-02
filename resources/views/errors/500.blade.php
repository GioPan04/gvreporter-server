@extends('layouts.web')
@section('head::title', 'Errore 404')

@section('app')
    Bruh, questo non doveva accadere...<br>
    Si è verificato l'errore 500, cosa non buona. Perfavore contatta il <a href="mailto:gioele@pannetto.com">webmaster</a>
    Puoi provare a tornare all'<a href="{{route('home')}}">homepage</a>
@stop
