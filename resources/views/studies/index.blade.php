@extends('layouts.common')
@section('content')
    <div class="subject border-bottom border-info">
        {!! link_to_route('maths.index','to keisan page',[],['class' => 'lead my-4 d-block text-sm-center']) !!}
    </div>
    <div class="subject border-bottom border-info text-sm-center">
        {!! link_to_route('kokugos.index','to kokugo page',[],['class' => 'lead my-4 d-block text-sm-center']) !!}
    </div>
    <div class="subject border-bottom border-info text-sm-center">
    {!! link_to_route('englishes.index','to english page',[],['class' => 'lead my-4 d-block text-sm-center']) !!}
    </div>
@endsection