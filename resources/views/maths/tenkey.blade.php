<div class="btn-group-vertical btn-block">
    <?php $num = 0; ?>
    @for($i = 0; $i < 3; $i++)
    <div class="btn-group btn-block">
        @for($j = 0 ; $j < 3; $j++)
        <?php $num += 1; ?>
        <button type="button" class="tenkey btn border btn-light" value="{{$num}}">{{$num}}</button>
        @endfor   
    </div>
    @endfor
    
    <div class="btn-group d-flex btn-block">
        <button id="calc_enter" type="button" class="btn border btn-light w-100">ENTER</button>
        <button type="button" class="tenkey btn border btn-light w-100" value="0">0</button>
        <button id="calc_reset" type="button" class="btn border btn-light w-100">RESET</button>
    </div>
</div>