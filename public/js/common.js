document.addEventListener('DOMContentLoaded',() => {
    const calc1_cont = document.getElementById('calc1_cont');
    const test = $('#calc1_cont').textContent;
    const calc1_btn = document.getElementById('calc1_btn');
    const calc1_reset = document.getElementById('calc1_reset');
    calc1_btn.addEventListener('click',()=> {
        calc1_cont.textContent = "pushed";
    });
    calc1_reset.addEventListener('click',()=> {
        calc1_cont.textContent = "1 + 1 = 2";
    });
    
});
