let isMenuOpen = false;
let scrollNavBar = false;
let windowScrollHistory = [0, 0];
let windowLastScroll;

function toggleMenu(goto){
    
    if(isMenuOpen){
        $("nav").removeClass('nav-open');
        $("nav").css('animation', 'nav-toggle-close .5s ease-in-out 0s 1 normal forwards');

        $('#banner').removeClass('disabled');
        $('html, body').removeClass('noScroll');

        if(typeof goto === 'undefined'){
            $(window).scrollTop(windowLastScroll);
        }else{
            window.location.href = `#${goto}`;
            $(window).scrollTop($(window).scrollTop() - 62);
        }
        
    }else{
        windowLastScroll = $(window).scrollTop();
        $("nav").addClass('nav-open');
        $("nav").css('animation', 'nav-toggle-open .5s ease-in-out 0s 1 normal forwards');

        $('#banner').addClass('disabled');
        $(window).scrollTop(0);
        $('body').addClass('noScroll');
    }
    isMenuOpen = !isMenuOpen;
    $("nav").css('top', '');
}

$(document).ready(()=>{
    console.log('ready');

    $("nav").on('animationend webkitAnimationEnd', e => {
        $("nav").css('animation', '');
        
        if(isMenuOpen){
            $("nav").css('top', '0px');
        }else{
            $("nav").css('top', '-154px');
        }
        console.log(e);
    });
});

$(window).on('load', () => {
    console.log('loaded');
    //on logo loaded
    window.setTimeout(()=>{

        //on page loaded
        window.setTimeout(()=>{
            $('#banner').removeClass('banner-loading');
            $('#banner').addClass('banner-loaded');
            $('html, body').removeClass('noScroll');

            $(window).scroll(e => {

                
                windowScrollHistory.push($(window).scrollTop());
        
                if(windowScrollHistory.length > 2){
                    windowScrollHistory.shift();
                }

                let isScrollingDown = windowScrollHistory[0] < windowScrollHistory[1];


                //show or hide nav bar on scroll
                if(!isMenuOpen && scrollNavBar){

                    let navTop = parseInt($("nav").css('top').replace('px', ''));
                    let newTop;
                    if(isScrollingDown){
                        
                        if(navTop <= -220){
                            newTop = -220;
                        }else{
                            newTop = navTop - 2;
                        }

                    }else{

                        if(navTop >= -154 || windowScrollHistory[1] == 0){
                            newTop = -154;
                        }else{
                            newTop = navTop + 4;
                        }

                    }
                    $("nav").css('top', `${newTop}px`);
                }

                console.log(windowScrollHistory);
            });
            
            $(window).on('click', e => {
                console.log(e);
            });

            //display menu
            $('nav').css('transition', 'top .5s');
            $('nav').css('top', '-154px');
            window.scrollTo(0, document.getElementById('about').getBoundingClientRect().top - 62);
            
            window.setTimeout(()=>{
                $('html').css('scroll-behavior', '');
                $('nav').css('transition', '');
                scrollNavBar = true;
            }, 1000);

        }, 1000);
    }, 1000);

});