<!DOCTYPE html>
<html class="loading">
    <head>
        <title>Test</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="black" />
        <link type="text/css" rel="stylesheet" href="./css/normalize.css" />
        <script src="./js/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./objects/responsiveSphere/css/style.css" />
        <script src="./objects/responsiveSphere/Sphere.js"></script>
    </head>
    <style>
        /* Material Icons */
        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: url(./fonts/woff2/MaterialIcons-Regular.woff2) format('woff2'),
                url(./fonts/woff/MaterialIcons-Regular.woff) format('woff'),
                url(./fonts/truetype/MaterialIcons-Regular.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(./fonts/woff2/WorkSans.woff2) format('woff2'),
                url(./fonts/truetype/WorkSans.ttf) format('truetype');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        .button{
            transition: all .3s;
        }

        @media (hover: hover){
            .button:not([disabled]):hover{
                filter:drop-shadow(0 0 4px white);
                transform: scale(1.1);
                cursor: pointer;
            }
        }

        *{
            box-sizing: border-box;
        }

        body{
            text-align: center;
            background-color: black;
            min-width: 360px;
            max-width: 1100px;
            margin: 0 auto;
            color: rgb(208, 254, 255);
        }

        .loading{
            width:100vw;
            height: 100vh;
            min-width: 0px;
            max-width: 100vw;
            overflow-y: hidden;
        }

        /*header*/
        .banner-loading{
            width: 100vw;
            overflow-y: scroll;
        }

        header{
            padding: 0;
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        } 
        header p{
            margin: 0;
            font-size: 5em;
            transition: font-size .5s;
        }
        /**/

        section{
            padding: 3%;
            margin: 100px 0 100px 0;
        }

        h2{
            font-size: 2em;
            font-family: 'Work Sans', 'Times New Roman', Times, serif;
            text-align: left;
            padding: .5em 0 .5em 1em;
            border: 1px solid rgba(71, 71, 71, 0.219);
            margin: 0 0 40px 0;
            line-height: normal;
            background-color: rgba(0, 139, 139, 0.164);
        }

        /* ABOUT */
        section#about{
            text-align: justify;
        }
        section#about > div{
            line-height: 2em;
            padding: 0 20px;
        }

        section#about img{
            margin-top: 8em;
            width: 50%;
            border-radius: 30%;
            float: left;
            shape-outside: border-box;
            padding: 7% 7% 7% 0;
            filter: grayscale(80%) brightness(90%);
        }
        /**/

        /* PROJECTS */
        #projects{
            overflow: hidden;
        }

            .project{
                position: relative;
                margin-bottom: 150px;
                padding-bottom: 40px;
                box-shadow: 0px 15px 50px -10px rgba(255, 255, 255, 0.281);
            }

            .project:last-child{
                margin-bottom: 50px;
            }

                .project-background{
                    position: absolute;
                    right: -15%;
                    height: 100%;
                    filter: brightness(50%);
                }

                img[src="./img/bg/splashes/splash2.png"]{
                    left: -10%;
                }

                img[src="./img/bg/splashes/splash3.png"]{
                    right: -5%;
                }

                img[src="./img/bg/splashes/splash4.png"]{
                    left: -5%;
                }

                .project h3{
                    z-index: 1;
                    position: relative;
                    padding-top: 1em;
                    text-transform: uppercase;
                }

                .project-details{
                    position: relative;
                    z-index: 1;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-around;
                }

                    .project-description p{
                        line-height: 2em;
                    }

                    .project-details > div{
                        margin: 0 20px;
                    }

                    .project-icon-group{
                        display: flex;
                        justify-content: space-between;
                    }

                    .project-icon-group a{
                        color: unset;
                        text-decoration: unset;
                    }

                    .project-icon{
                        margin: 0 15px;
                    }

                    .project-icon img{
                        height: 40px;
                    }

                    .project-icon p{
                        font-size: .7em;
                        line-height: normal;
                        margin-top: 3px;
                    }

        /* footer */
        footer{
            padding: 2em;
        }

        footer div#footer-visible{
            display: flex;
            justify-content: space-around;
        }

        footer div#footer-hidden{
            overflow: hidden;
            display: none;
        }

        footer a{
            color: rgb(153, 240, 255);
        }

        footer a:visited{
            color: rgb(211, 164, 255);
        }

        /* MEDIA QUERIES */
        @media screen and (min-width: 470px){
            body{
                font-size: 1.25rem;
            }
            section#about img{
                width: 45%;
            }

            section#about > div{
                padding: 0 30px;
            }

            section{
                padding: 4%;
            }
        }

        @media screen and (min-width: 640px){

            section#about img{
                margin-top: 4em;
                width: 40%;
            }

            section#about > div{
                padding: 0 40px;
            }

            section{
                padding: 6%;
            }
        }

        @media screen and (min-width: 750px){
            body{
                font-size: 1.5rem;
            }
            
            section{
                padding: 8%;
            }
        }

        @media screen and (min-width: 950px){
            section#about img{
                margin-top: 0;
                width: 30%;
            }

            section#about > div{
                padding: 0 50px;
            }

            section{
                padding: 10%;
            }
        }


        /* gallery */
        #gallery{
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            z-index: 10;
            font-size: 5rem;
            user-select: none;
        }

        #gallery > div{
            position: absolute;
            width: 100%;
            height: 100%;
        }

        #gallery-image-cont{
            z-index: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #gallery-image-cont img{
            max-height: 90%;
            max-width: 90%;
            box-shadow: 10px 10px 30px -15px rgba(255, 255, 255, 0.719);

        }

        #gallery-close-btn{
            position: absolute;
            z-index: 2;
            top: 10px;
            right: 10px;
            text-align: right;
            font-size: 3rem;
        }

        #gallery-image-navigation{
            z-index: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /*FORM*/
        #contact > p{
            margin: 3em 1em;
            line-height: 2em;
        }
        input, textarea, option, select{
            padding: .5em;
            display: block;
            margin: 10px auto;
            text-align: center;
            border-radius: .5em;
            box-shadow: 3px 3px 10px -5px white;
        }

        form{
            display: flex;
            flex-direction: column;
        }

        label{
            margin-top: 2em;
            text-align: center;
        }

        form button{
            width: 90px;
            padding: .5em;
            border-radius: 10%;
            margin: 40px auto;
        }

        form textarea{
            width: 100%;
            height: 400px;
            text-align: left;
            padding: .9em;
        }



    </style>
    <body class="loading">

        <div id="gallery">
            <div id="gallery-image-cont">
                <img id="gallery-img" src="#" alt="gallery image" />
            </div>
            <button onclick="closeGallery()" id="gallery-close-btn" class="button">&#9746;</button>
            <div id="gallery-image-navigation">
                <button onclick="prevImg()" class="button" id="gallery-prev-image-btn">&#10094;</button>
                <button onclick="nextImg()" class="button" id="gallery-next-image-btn">&#10095;</button>
            </div>
        </div>

        <header class="banner-loading">
            <p id="banner-top">PLEASE</p>
            <div id="banner-animation"></div>
            <script>
                const sphere = new Sphere();
                sphere.addEventListener('COMPLETE', () =>{
                    $('#banner-animation').append(sphere);
                    $('#banner-top, #banner-bottom').css('font-size', '0');
                    window.setTimeout(()=>{
                        $('html, body').removeClass('loading');
                        $('header').removeClass('banner-loading');
                        sphere.hideText();
                        sphere.stick();
                        // window.scrollTo({
                        //     left: 0,
                        //     top: document.getElementById('about').getBoundingClientRect().top - 0,
                        //     behavior: 'smooth'
                        // });
                    }, 1000);
                });
            </script>
            <p id="banner-bottom">WAIT</p>
        </header>
        
        <main>

            <div class="section-container">
                <section id="about">
                    <h2>ABOUT</h2>
                    <div>
                        <img src="./img/author.jpg" />Nullam justo leo, pharetra eu luctus et, vulputate ut sem. Maecenas eget lacinia tortor. Suspendisse lectus felis, viverra quis tincidunt ut, aliquet quis purus. Mauris venenatis elit sed quam ultrices, quis faucibus purus mollis. Phasellus vitae euismod lorem, sit amet tristique urna. Phasellus dictum pulvinar augue, sit amet tincidunt risus blandit id. Quisque lacinia, sapien at porta congue, purus sem pulvinar lectus, ac blandit nisi urna quis urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed facilisis, ipsum ut aliquam pellentesque, tellus dui tempus metus, a pulvinar est mauris vitae lorem.
                    </div>
                </section>
            </div>

            <div class="section-container">
                <section id="projects">
                    <h2>PROJECTS</h2>

                    <article class="project">
                        <img class="project-background" src="./img/bg/splashes/splash1.png" />
                        <h3>Nam et tempor libero</h3>
                            <div class="project-details">
                                <div class="project-description">
                                    <p>Nam et tempor libero. Ut efficitur nulla turpis, nec posuere velit venenatis sollicitudin. Duis ornare justo eros, quis dapibus sem convallis ut. Vivamus orci velit, porta ac felis et, vehicula accumsan eros.</p>
                                </div>
                                <div>
                                    <h4>TECHNOLOGIES</h4>
                                    <div class="project-icon-group">
                                        <div class="project-icon">
                                            <img src="./img/icons/html.png" />
                                            <p>HTML 5</p>
                                        </div>
                                        <div class="project-icon">
                                            <img src="./img/icons/css.png" />
                                            <p>CSS 3</p>
                                        </div>
                                        <div class="project-icon">
                                            <img src="./img/icons/javascript.png" />
                                            <p>ECMAScript 2018</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4>LINKS</h4>
                                    <div class="project-icon-group">
                                        <a class="button" href="https://www.google.com/search?q=alpha" target="_blank" title="Visit project">
                                            <div class="project-icon">
                                                <img src="./img/icons/language_white_24dp.svg" />
                                                <p>WWW</p>
                                            </div>
                                        </a>
                                        <a class="button" href="https://www.github.com/" target="_blank" title="See project's codebase">
                                            <div class="project-icon">
                                                <img src="./img/icons/github.png" />
                                                <p>Github</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <h4>GALLERY</h4>
                                    <div class="project-icon-group">
                                        <div tabindex="0" onkeyup="openGallery(event, 'a', 'mobile')" onclick="openGallery(event, 'a', 'mobile')" class="project-icon button">
                                            <img src="./img/icons/phone_android_white_24dp.svg" />
                                            <p>Mobile</p>
                                        </div>
                                        <div tabindex="0" onkeyup="openGallery(event, 'a', 'desktop')" onclick="openGallery(event, 'a', 'desktop')" class="project-icon button">
                                            <img src="./img/icons/desktop_windows_white_24dp.svg" />
                                            <p>Desktop</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </article>

                    <article class="project">
                        <img class="project-background" src="./img/bg/splashes/splash2.png" />
                        <h3>Aenean sed enim nisi</h3>
                            <div class="project-details">
                                <div class="project-description">
                                    <p>Nam et tempor libero. Ut efficitur nulla turpis, nec posuere velit venenatis sollicitudin. Duis ornare justo eros, quis dapibus sem convallis ut. Vivamus orci velit, porta ac felis et, vehicula accumsan eros.</p>
                                </div>
                                <div>
                                    <h4>TECHNOLOGIES</h4>
                                    <div class="project-icon-group">
                                        <div class="project-icon">
                                            <img src="./img/icons/html.png" />
                                            <p>HTML 5</p>
                                        </div>
                                        <div class="project-icon">
                                            <img src="./img/icons/css.png" />
                                            <p>CSS 3</p>
                                        </div>
                                        <div class="project-icon">
                                            <img src="./img/icons/javascript.png" />
                                            <p>ECMAScript 2018</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4>LINKS</h4>
                                    <div class="project-icon-group">
                                        <a href="https://www.google.com/search?q=alpha" target="_blank" title="Visit project">
                                            <div class="project-icon button">
                                                <img src="./img/icons/language_white_24dp.svg" />
                                                <p>WWW</p>
                                            </div>
                                        </a>
                                        <a href="https://www.github.com/" target="_blank" title="See project's codebase">
                                            <div class="project-icon button">
                                                <img src="./img/icons/github.png" />
                                                <p>Github</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <h4>GALLERY</h4>
                                    <div class="project-icon-group">
                                        <div tabindex="0" onkeyup="openGallery(event, 'b', 'mobile')" onclick="openGallery(event, 'b', 'mobile')" class="project-icon button">
                                            <img src="./img/icons/phone_android_white_24dp.svg" />
                                            <p>Mobile</p>
                                        </div>
                                        <div tabindex="0" onkeyup="openGallery(event, 'b', 'desktop')" onclick="openGallery(event, 'b', 'desktop')" class="project-icon button">
                                            <img src="./img/icons/desktop_windows_white_24dp.svg" />
                                            <p>Desktop</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </article>

                    <article class="project">
                        <img class="project-background" src="./img/bg/splashes/splash3.png" />
                        <h3>Nam at nunc quam</h3>
                            <div class="project-details">
                                <div class="project-description">
                                    <p>Nam et tempor libero. Ut efficitur nulla turpis, nec posuere velit venenatis sollicitudin. Duis ornare justo eros, quis dapibus sem convallis ut. Vivamus orci velit, porta ac felis et, vehicula accumsan eros.</p>
                                </div>
                                <div>
                                    <h4>TECHNOLOGIES</h4>
                                    <div class="project-icon-group">
                                        <div class="project-icon">
                                            <img src="./img/icons/html.png" />
                                            <p>HTML 5</p>
                                        </div>
                                        <div class="project-icon">
                                            <img src="./img/icons/css.png" />
                                            <p>CSS 3</p>
                                        </div>
                                        <div class="project-icon">
                                            <img src="./img/icons/javascript.png" />
                                            <p>ECMAScript 2018</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4>LINKS</h4>
                                    <div class="project-icon-group">
                                        <a href="https://www.google.com/search?q=alpha" target="_blank" title="Visit project">
                                            <div class="project-icon button">
                                                <img src="./img/icons/language_white_24dp.svg" />
                                                <p>WWW</p>
                                            </div>
                                        </a>
                                        <a href="https://www.github.com/" target="_blank" title="See project's codebase">
                                            <div class="project-icon button">
                                                <img src="./img/icons/github.png" />
                                                <p>Github</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <h4>GALLERY</h4>
                                    <div class="project-icon-group">
                                        <div tabindex="0" onkeyup="openGallery(event, 'c', 'mobile')" onclick="openGallery(event, 'c', 'mobile')" class="project-icon button">
                                            <img src="./img/icons/phone_android_white_24dp.svg" />
                                            <p>Mobile</p>
                                        </div>
                                        <div tabindex="0" onkeyup="openGallery(event, 'c', 'desktop')" onclick="openGallery(event, 'c', 'desktop')" class="project-icon button">
                                            <img src="./img/icons/desktop_windows_white_24dp.svg" />
                                            <p>Desktop</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </article>
                    
                    <article class="project">
                        <img class="project-background" src="./img/bg/splashes/splash4.png" />
                        <h3>Fusce blandit</h3>
                            <div class="project-details">
                                <div class="project-description">
                                    <p>Nam et tempor libero. Ut efficitur nulla turpis, nec posuere velit venenatis sollicitudin. Duis ornare justo eros, quis dapibus sem convallis ut. Vivamus orci velit, porta ac felis et, vehicula accumsan eros.</p>
                                </div>
                                <div>
                                    <h4>TECHNOLOGIES</h4>
                                    <div class="project-icon-group">
                                        <div class="project-icon">
                                            <img src="./img/icons/html.png" />
                                            <p>HTML 5</p>
                                        </div>
                                        <div class="project-icon">
                                            <img src="./img/icons/css.png" />
                                            <p>CSS 3</p>
                                        </div>
                                        <div class="project-icon">
                                            <img src="./img/icons/javascript.png" />
                                            <p>ECMAScript 2018</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4>LINKS</h4>
                                    <div class="project-icon-group">
                                        <a href="https://www.google.com/search?q=alpha" target="_blank" title="Visit project">
                                            <div class="project-icon button">
                                                <img src="./img/icons/language_white_24dp.svg" />
                                                <p>WWW</p>
                                            </div>
                                        </a>
                                        <a href="https://www.github.com/" target="_blank" title="See project's codebase">
                                            <div class="project-icon button">
                                                <img src="./img/icons/github.png" />
                                                <p>Github</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <h4>GALLERY</h4>
                                    <div class="project-icon-group">
                                        <div tabindex="0" onkeyup="openGallery(event, 'd', 'mobile')" onclick="openGallery(event, 'd', 'mobile')" class="project-icon button">
                                            <img src="./img/icons/phone_android_white_24dp.svg" />
                                            <p>Mobile</p>
                                        </div>
                                        <div tabindex="0" onkeyup="openGallery(event, 'd', 'desktop')" onclick="openGallery(event, 'd', 'desktop')" class="project-icon button">
                                            <img src="./img/icons/desktop_windows_white_24dp.svg" />
                                            <p>Desktop</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </article>

                </section>
            </div>

            <div class="section-container">
                <section id="contact">
                    <h2>Contact</h2>
                    <p>If you have a query write to me at s@jakubek.co.uk or use the form below</p>
                    <form>
                        
                        <label for="title">Title
                            <select id="title" name="title">
                                <option value="Mr">Mr</option>
                                <option value="Master">Master</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Ms">Ms</option>
                                <option value="Miss">Miss</option>
                                <option value="Mx">Mx</option>
                            </select>
                        </label>

                        <label for="name">Name
                            <input id="name" name="name" required type="text" placeholder="name" value="" />
                        </label>

                        <label for="surname">Surname
                            <input id="surname" name="surname" required type="text" placeholder="surname" value="" />
                        </label>

                        <label for="email">Email
                            <input id="email" name="email" required type="text" placeholder="email" value="" />
                        </label>

                        <label for="telephone">Telephone
                            <input id="telephone" name="telephone" type="text" placeholder="telephone" value=""/>
                        </label>

                         <label for="message">Message
                            <textarea id="message" name="message" required placeholder="message"></textarea>
                        </label>

                        <button class='button'>Send</button>
                    </form>
                </section>
            </div>  

        </main>

        <footer>
                <div id="footer-visible">
                    <p>&copy; Slawomir Jakubek <?= date('Y'); ?></p>
                    <p onclick="$('#footer-hidden').slideToggle();" class="button">credits &#10162;</p>
                </div>
                <div id="footer-hidden">
                    <a href="http://www.freepik.com" target="_blank">Background images at each project designed by denamorado / Freepik</a>
                </div>
        </footer>

        <script>
            /*GALLERY*/
            const gallery = document.getElementById('gallery');
            const image = document.getElementById('gallery-img');
            const mainContent = document.getElementsByTagName('main')[0];
            const galleryPrevImageBtn = document.getElementById('gallery-prev-image-btn');
            const galleryNextImageBtn = document.getElementById('gallery-next-image-btn');

            let windowScrollY;

            class GalleryData{
        
                constructor(paths){
                    this.paths = paths;
                    this.index = 0;
                }

                get path(){
                    return this.paths[this.index];
                }

                get hasPrevious(){
                    return this.index > 0;
                }

                get hasNext(){
                    return this.index < this.paths.length - 1;
                }

                get nextPath(){
                    if(this.hasNext){
                        this.index++;
                        return this.path;
                    }else{
                        return null;
                    }
                }

                get previousPath(){
                    if(this.hasPrevious){
                        this.index--;
                        return this.path;
                    }else{
                        return null;
                    }
                }
            }

            const projectsData = {
                a: {
                    galleries: {
                        mobile: new GalleryData([
                            './img/projects/a/mobile/1.jpg',
                            './img/projects/a/mobile/2.jpg',
                            './img/projects/a/mobile/3.jpg'
                        ]),
                        desktop: new GalleryData([
                            './img/projects/a/desktop/1.jpg',
                            './img/projects/a/desktop/2.jpg',
                            './img/projects/a/desktop/3.jpg'
                        ])
                    }
                },
                b: {
                    galleries: {
                        mobile: new GalleryData([
                            './img/projects/b/mobile/1.jpg',
                            './img/projects/b/mobile/2.jpg',
                            './img/projects/b/mobile/3.jpg'
                        ]),
                        desktop: new GalleryData([
                            './img/projects/b/desktop/1.jpg',
                            './img/projects/b/desktop/2.jpg',
                            './img/projects/b/desktop/3.jpg'
                        ])
                    }
                },
                c: {
                    galleries: {
                        mobile: new GalleryData([
                            './img/projects/c/mobile/1.jpg',
                            './img/projects/c/mobile/2.jpg',
                            './img/projects/c/mobile/3.jpg'
                        ]),
                        desktop: new GalleryData([
                            './img/projects/c/desktop/1.jpg',
                            './img/projects/c/desktop/2.jpg',
                            './img/projects/c/desktop/3.jpg'
                        ])
                    }
                },
                d: {
                    galleries: {
                        mobile: new GalleryData([
                            './img/projects/d/mobile/1.jpg',
                            './img/projects/d/mobile/2.jpg',
                            './img/projects/d/mobile/3.jpg'
                        ]),
                        desktop: new GalleryData([
                            './img/projects/d/desktop/1.jpg',
                            './img/projects/d/desktop/2.jpg',
                            './img/projects/d/desktop/3.jpg'
                        ])
                    }
                }
            }

            let data;

            function openGallery(event, projectName, mode){
                if(event.type == 'keyup'){
                    if(event.key != 'Enter'){
                        return;
                    }
                }

                windowScrollY = window.scrollY;
                showGallery();
                data = projectsData[projectName]['galleries'][mode];
                displayImg(data.path);
                window.addEventListener('keyup', onKeyUp);
            }

            function closeGallery(){
                hideGallery();
                window.scrollTo(0, windowScrollY);
                window.removeEventListener('keyup', onKeyUp);
            }

            function onKeyUp(e){
                switch(e.key){
                    case 'ArrowRight': nextImg();
                    break;
                    case 'ArrowLeft': prevImg();
                    break;
                    case 'Escape': closeGallery();
                    break;
                }
            }

            function prevImg(){
                if(data.hasPrevious){
                    displayImg(data.previousPath);
                }
            }

            function nextImg(){
                if(data.hasNext){
                    displayImg(data.nextPath);
                }
            }

            function displayImg(src){
                image.src = src;
                galleryPrevImageBtn.disabled = !data.hasPrevious;
                galleryNextImageBtn.disabled = !data.hasNext;
            }

            function showGallery(){
                mainContent.style.display = 'none';
                gallery.style.display = "block";
            }

            function hideGallery(){
                mainContent.style.display = 'block';
                gallery.style.display = "none";
            }

            /*CONTACT*/

            $('form').on('submit', e => {
                e.preventDefault();
                console.log($('form').serialize());
            });

        </script>
    </body>
</html>