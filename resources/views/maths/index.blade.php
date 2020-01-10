@extends('layouts.common')
@section('content')
    <div id="calc1" class="mb-4 border-bottom border-info">
        <h4 class="pl-2" data-toggle="collapse" data-target="#calc1_contentarea">tashizan</h4>
        <div id="calc1_contentarea" class="contentarea pb-4 collapse">
            <div class="mondai d-flex py-4">
                <div class="siki w-75 text-center">1 + 1 = </div>
                <div class="ans w-25">0</div>
            </div>
            <div id="calc1_setting"></div>
            @include('maths.tenkey')
        </div>
    </div>
    <div id="calc2" class="mb-4 border-bottom border-info">
        <h4 class="pl-2" data-toggle="collapse" data-target="#calc2_contentarea">hikizan</h4>
        <div id="calc2_contentarea" class="contentarea pb-4 collapse">    
            <div class="mondai d-flex py-4">
                <div class="siki w-75 text-center">1 - 1 = </div>
                <div class="ans w-25">0</div>
            </div>
            @include('maths.tenkey')
        </div>
    </div>
    <div id="calc3" class="mb-4 border-bottom border-info">
        <h4 class="pl-2" data-toggle="collapse" data-target="#calc3_contentarea">kuku</h4>
        <div id="calc3_contentarea" class="contentarea pb-4 collapse">
            <div class="mondai py-4">
                <span class="siki">1 * 1 = </span><span class="ans"></span>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/js/math.js') }}"></script>
@endsection