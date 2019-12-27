@extends('layouts.common')
@section('content')
    <div id="calc1" class="subject border-bottom border-info">
        <div id="calc1_cont">1 + 1 = 2</div>
        <div id="calc1_setting"></div>
        <div class="btn-group btn-block" role="group" aria-label="keisan and reset">
            <button id="calc1_btn" type="button" class="btn btn-info">keisan</button>
            <button id="calc1_reset" type="button" class="btn btn-secondary">reset</button>
        </div>
    </div>
    <div id="calc2" class="subject border-bottom border-info">
        hikizan
    </div>
    <div id="calc3" class="subject border-bottom border-info">
        kuku
    </div>
    <script type="text/javascript" src="{{ asset('/js/math.js') }}"></script>
@endsection