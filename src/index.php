<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $metadata[ 'page_title' ] ) && $metadata[ 'page_title' ] ) echo $metadata[ 'page_title' ] . " - "; ?>Softwayr</title>

        <link rel="stylesheet" type="text/css" href="/assets/css/stylesheet.css">
    </head>

    <body>
        <a name="home"></a>
        <section class="banner">
            <div class="navbar">
                <h1><a href="#"><img src="/assets/images/logos/softwayr-logo.png" alt="Softwayr" class="logo"></a></h1>

                <nav>
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#projects">Projects</a>
                    <a href="#contact">Contact</a>
                </nav>
            </div>

            <div class="content">
                <h2>WELCOME TO SOFTWAYR</h2>
                <p>A software development studio based in Ayrshire, Scotland.</p>

                <div class="buttons">
                    <a href="#about" class="button"><span></span>Find Out More</a>
                    <a href="#contact" class="button"><span></span>Contact</a>
                </div>
            </div>
        </section>

        <a name="about"></a>
        <section class="about">
            <div class="container">
                <h2>About Softwayr</h2>
                <p>The studio was created to serve as a central hub for various software-related projects and activities.</p>
            </div>
        </section>

        <a name="projects"></a>
        <section class="projects">
            <div class="container">
                <h2>Projects</h2>
                <p>Here are some of the projects the studio has been working on.</p>

                <div class="projects">
                    <div class="project">
                        <h3>StaticPHP</h3>
                        <p>Fast and Simple Static Site Generator</p>
                        <p><a href="https://staticphp.softwayr.io" target="_blank">Visit Site</a></p>
                    </div>
                </div>
            </div>
        </section>

        <a name="contact"></a>
        <section class="contact">
            <div class="container">
                <h2>Contact Softwayr</h2>
                <p>Whether you have software development idea, or want to discuss an existing project, or simply want to say hello, you are welcome to get in touch.</p>
                <p>Best method to contact Softwayr is via email.</p>
                <p><span class="email-address">contact [at] softwayr [dot] com</span></p>
            </div>
        </section>

        <footer>
            <div class="container">
                <p>Copyright &copy; <a href="https://david-hunter.net" target="_blank">David Hunter</a>. Powered by <a href="https://staticphp.softwayr.io" target="_blank">StaticPHP</a>.</p>
            </div>
        </footer>

        <script src="/assets/js/anti-email-harvesting.js"></script>
    </body>
</html>
