$(function() {
    const calc1_num = $('#calc1_contentarea .num');
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
        if(Array.from(calc1_ans.innerText).length < 8) {
            calc1_ans.innerText += $(this).val(); 
        }
    });

    calc_enter.on('click',function(){
        console.log(calc1_ans.innerText);
    });
    calc_reset.on('click',function() {
        calc1_ans.innerText = "";
    });
});

