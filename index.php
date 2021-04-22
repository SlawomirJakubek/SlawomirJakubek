<!DOCTYPE html>
<html lang="en" dir="ltr" class="noScroll" style="scroll-behavior: smooth;">
    <head>
        <title>Slawomir Jakubek Portfolio</title>
        <meta name="theme-color" content="black" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link type="text/css" rel="stylesheet" href="./css/normalize.css" />
        <link type="text/css" rel="stylesheet" href="./css/style.css" />
        <link type="text/css" rel="stylesheet" href="./objects/responsiveSphere/css/style.css" />
        <script src="./js/jquery-3.6.0.min.js"></script>
        <script src="./js/javascript.js"></script>
        <script src="./objects/responsiveSphere/Sphere.js"></script>
    </head>
    <body class="noScroll">

        <header>
            <nav>
                <ul>
                    <li><a onclick="toggleMenu('about')">about</a></li>
                    <li><a onclick="toggleMenu('projects')">projects</a></li>
                    <li><a onclick="toggleMenu('contact')">contact</a></li>
                </ul>
                <button id="menuBtn" onclick="toggleMenu()">&#9776;</button>
            </nav>
            <section id="banner" style="overflow-y: scroll">
                <div id="banner-container">
                    <p id="banner-name">SLAWOMIR</p>
                    <div id="banner-animation"></div>
                    <script>$('#banner-animation').append(new Sphere(280));</script>
                    <p id="banner-surname">JAKUBEK</p>
                </div>
            </section>
        </header>

        <main>
            <section id="about">
                <h2>ABOUT</h2>
                <img src="./img/author.jpg" alt="Image of Slawomir Jakubek, author of this portfolio" />
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </section>

            <section id="projects">
                <h2>PROJECTS</h2>

                <article class="project">
                    <div class="project-title">
                        <h3>Title 1</h3>
                    </div>
                    <div class="project-description-and-image">
                        <div class="project-description">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="project-img">
                            <img src="#" alt="project image"/>
                        </div>
                    </div>
                    <div class="project-link">
                        <button>open 1</button>
                    </div>
                </article>

                <article class="project">
                    <div class="project-title">
                        <h3>Title 2</h3>
                    </div>
                    <div class="project-description-and-image">
                        <div class="project-description">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="project-img">
                            <img src="#" alt="project image"/>
                        </div>
                    </div>
                    <div class="project-link">
                        <button>open 2</button>
                    </div>
                </article>

                <article class="project">
                    <div class="project-title">
                        <h3>Title 3</h3>
                    </div>
                    <div class="project-description-and-image">
                        <div class="project-description">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="project-img">
                            <img src="#" alt="project image"/>
                        </div>
                    </div>
                    <div class="project-link">
                        <button>open 3</button>
                    </div>
                </article>
            </section>

            <section id="contact">
                <h2>CONTACT</h2>
                <p>&#9993; s@jakubek.co.uk</p>
            </section>

        </main>

        <footer>
            <p>&copy; Slawomir Jakubek <?= date("Y"); ?></p>
        </footer>
        
    </body>
</html>