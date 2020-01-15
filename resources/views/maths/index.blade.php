@extends('layouts.common')
@section('content')
    <div id="calc1" class="mb-4 border-bottom border-info">
        <div class="row no-gutters">
            <h4 class="col-10 pl-2 mb-0" data-toggle="collapse" data-target="#calc1_contentarea">tashizan</h4>
            <button id="calc1_setting" type="button" class="col-2 btn btn-info text-center rounded-0">
                setting
            </button>
        </div>
        
        <div id="calc1_contentarea" class="contentarea pb-4 collapse">
            <div class="m-auto py-4 row no-gutters">
                <div class="siki col-8 row no-gutters">
                    <span class="num col-4 text-center">1</span>
                    <span class="operator col-2 text-center">+</span> 
                    <span class="num col-4 text-center">1</span>
                    <span class="equal col-2 text-center">=</span>
                </div>
                <div class="ans text-center col-4">2</div>
            </div>
            @include('maths.tenkey')
        </div>
    </div>
    <div id="calc2" class="mb-4 border-bottom border-info">
        <h4 class="pl-2" data-toggle="collapse" data-target="#calc2_contentarea">hikizan</h4>
        <div id="calc2_contentarea" class="contentarea pb-4 collapse">    
            <div class="m-auto py-4 row no-gutters">
                <div class="siki col-8 row no-gutters">
                    <span class="num1 col-4 text-center">1</span>
                    <span class="operator col-2 text-center">-</span> 
                    <span class="num2 col-4 text-center">1</span>
                    <span class="equal col-2 text-center">=</span>
                </div>
                <div class="ans text-center col-4">0</div>
            </div>
            <div id="calc2_setting"></div>
            @include('maths.tenkey')
        </div>
    </div>
    <div id="calc3" class="mb-4 border-bottom border-info">
        <h4 class="pl-2" data-toggle="collapse" data-target="#calc3_contentarea">kuku</h4>
        <div id="calc3_contentarea" class="contentarea pb-4 collapse">
            <div class="py-4">
                <span class="siki">1 * 1 = </span><span class="ans"></span>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/js/math.js') }}"></script>
@endsection