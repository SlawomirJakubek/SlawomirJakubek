<!DOCTYPE html>
<html lang="en" dir="ltr" class="htmlBody-loading">
    <head>
        <title>Slawomir Jakubek Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link type="text/css" rel="stylesheet" href="./css/normalize.css" />
        <link type="text/css" rel="stylesheet" href="./css/style.css" />
        <script src="./js/jquery-3.6.0.min.js"></script>
        <script src="./js/javascript.js"></script>
    </head>
    <body class="htmlBody-loading">

        <header>
            <nav>
                <ul>
                    <li><a onclick="goTo('about')">about</a></li>
                    <li><a onclick="goTo('projects')">projects</a></li>
                    <li><a onclick="goTo('contact')">contact</a></li>
                </ul>
                <button onclick="toggleMenu()">&#9776;</button>
            </nav>
            <section id="banner" class="banner-loading">
                <h1 id="banner-title">SLAWOMIR<br>JAKUBEK</h1>
                <div id="banner-animation"></div>
            </section>
        </header>

        <main>
            <section id="about">
                <h2>ABOUT</h2>
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
                        <button>open</button>
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
                        <button>open</button>
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
                        <button>open</button>
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