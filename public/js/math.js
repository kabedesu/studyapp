$(function() {
    const calc1_cont = $('#calc1_cont');
    const calc1_siki = $('#calc1 .siki')[0];
    const calc2_siki = $('#calc2 .siki')[0];
    const calc1_ans = $('#calc1 .ans')[0];
    const calc2_ans = $('#calc2 .ans')[0];
    const calc1_tenkey = $('#calc1 .tenkey');
    const calc2_tenkey = $('#calc2 .tenkey');
    const calc_enter = $('#calc_enter');
    const calc_reset = $('#calc_reset');

    calc1_tenkey.on('click',function(){
        if(calc1_ans.innerText == 0) {
            calc1_ans.innerText = "";
        } 
        calc1_ans.innerText += $(this).val(); 
    });

    calc_enter.on('click',function(){
        calc1_ans.innerText = "pushed enter";
    });
    calc_reset.on('click',function() {
        calc1_ans.innerText = "0";
    });
});

