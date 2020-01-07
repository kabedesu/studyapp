$(function() {
    const calc1_cont = $('#calc1_cont');
    const calc1_btn = $('#calc1_btn');
    const calc1_reset = $('#calc1_reset');
    
    calc1_btn.on('click',function(){
        calc1_cont[0].innerText = "pushed";
    });
    calc1_reset.on('click',function() {
        calc1_cont[0].innerText = "1 + 1 = 2";
    });
});

