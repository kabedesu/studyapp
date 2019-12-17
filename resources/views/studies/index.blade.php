@extends('layouts.common')
@section('content')
    <div id="sansu" class="subject border-bottom border-info">
        <a href="{{ action('MathsController@index') }}"class="lead my-4 d-block text-sm-center">keisan</a>
    </div>
    <div id="kokugo" class="subject border-bottom border-info text-sm-center">
        <a href="{{ action('KokugosController@index') }}" class="lead my-4 d-block">kokugo</a>
    </div>
    <div id="english" class="subject border-bottom border-info text-sm-center">
        <a href="{{ action('EnglishesController@index') }}" class="lead my-4 d-block">english</a>
    </div>
@endsection