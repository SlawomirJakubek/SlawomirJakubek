let interval;
let counter = 1;
let breakInterval = false;

window.addEventListener('DOMContentLoaded', () => { interval = animatePleaseWait(); });
window.addEventListener('load', ()=>{
    console.log('loaded');
    breakInterval = true;
});

function x(){
    console.log('next step');
}

function animatePleaseWait(){
    const PLEASE_WAIT = 'please wait';
    const h1 = document.getElementsByTagName('h1')[0];
    h1.innerHTML =  PLEASE_WAIT + '<span class="colorBlack">.</span><span class="colorBlack">.</span><span class="colorBlack">.</span>';

    let dots = '';

    return window.setInterval(()=>{
        console.log(counter);

        if(breakInterval && counter == 1){
            clearInterval(interval);
            x();
            return;
        }

        switch(counter){
            case 1: dots = '.<span class="colorBlack">.</span><span class="colorBlack">.</span>';
            break;
            case 2: dots = '..<span class="colorBlack">.</span>';
            break;
            case 3: dots = '...';
            break;
            default: dots = '<span class="colorBlack">.</span><span class="colorBlack">.</span><span class="colorBlack">.</span>';
        }

        h1.innerHTML = `${PLEASE_WAIT}${dots}`;

        counter++;
        counter = counter < 4 ? counter : 0;

    }, 600);
}