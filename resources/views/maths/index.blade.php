@extends('layouts.common')
@section('content')
    <div id="calc1" class="mb-4">
        <h4 class="pl-2">tashizan</h4>
        <div class="py-4 text-center">
            <span class="siki">1 + 1 = </span><span class="ans"></span>
        </div>
        <div id="calc1_setting"></div>
        @include('maths.tenkey')
    </div>
    <div id="calc2" class="mb-4">
        <h4 class="pl-2">hikizan</h4>
        <div class="py-4 text-center">
            <span class="siki">2 - 1 = </span><span class="ans"></span>
        </div>
        @include('maths.tenkey')
    </div>
    <div id="calc3" class="mb-4">
        <h4 class="pl-2">kuku</h4>
        <div class="py-4 text-center">
        <span class="siki">1 * 1 = </span><span class="ans"></span>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/js/math.js') }}"></script>
@endsection