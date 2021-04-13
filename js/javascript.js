let isMenuOpen = false;
let windowScrollHistory = [0];


function toggleMenu(){
    if(isMenuOpen){
        $("nav").removeClass('nav-open');
        $("nav").addClass('nav-standby');
        $('section, footer').removeClass('disabled');
    }else{
        $("nav").removeClass('nav-standby');
        $("nav").addClass('nav-open');
        $('section, footer').addClass('disabled');
    }
    isMenuOpen = !isMenuOpen;
}

let removeStandBy = true;
function goTo(name){
    removeStandBy = false;
    toggleMenu();
    window.location.href = `#${name}`;
    $(window).scrollTop($(window).scrollTop() - 64);
}

$(document).ready(()=>{
    console.log('ready');
});

$(window).on('load', () => {
    console.log('loaded');
});

window.setTimeout(()=>{
    $('#banner-animation').css('background-color', 'rgb(0, 80, 80)');


    window.setTimeout(()=>{
        $('#banner').removeClass('banner-loading');
        $('#banner').addClass('banner-loaded');
        $('html, body').removeClass('htmlBody-loading');

        $(window).scroll(e => {

            windowScrollHistory.push($(window).scrollTop());
        
            if(windowScrollHistory.length > 2){
                windowScrollHistory.shift();
            }
        
            if(windowScrollHistory[0] < windowScrollHistory[1] && removeStandBy){
                $("nav").removeClass('nav-standby');
            }else{
                $("nav").addClass('nav-standby');
            }
        
            removeStandBy = true;
            console.log(windowScrollHistory);
        });
        
        $(window).on('click', e => {
            console.log(e);
        });

        $('nav').addClass('nav-standby');

    }, 1000);
}, 1000);