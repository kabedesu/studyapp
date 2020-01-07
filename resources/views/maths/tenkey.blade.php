<div class="btn-group-vertical btn-block">
    <?php $num = 0; ?>
    @for($i = 0; $i < 3; $i++)
    <div class="btn-group btn-block">
        @for($j = 0 ; $j < 3; $j++)
        <button type="button" class="btn border">{{$num += 1}}</button>
        @endfor   
    </div>
    @endfor
    
    <div class="btn-group btn-block">
        <button id="calc1_btn" type="button" class="btn btn-info">keisan</button>
        <button id="calc1_reset" type="button" class="btn btn-secondary">reset</button>
    </div>
</div>
