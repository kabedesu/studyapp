@extends('layouts.common')
@section('content')
    <div id="calc1" class="mb-4">
        <h4 class="pl-2">tashizan</h4>
        <div id="calc1_cont" class="py-4 text-center">1 + 1 = 2</div>
        <div id="calc1_setting"></div>
        @include('maths.tenkey')
    </div>
    <div id="calc2" class="mb-4">
        <h4 class="pl-2">hikizan</h4>
        <div id="calc2_cont" class="py-4 text-center">2 - 1 = 1</div>
        @include('maths.tenkey')
    </div>
    <div id="calc3" class="mb-4">
        <h4 class="pl-2">kuku</h4>
        <div id="calc3_cont" class="py-4 text-center">1 * 1 = 1</div>
    </div>
    <script type="text/javascript" src="{{ asset('/js/math.js') }}"></script>
@endsection