<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $page_title ) && $page_title ) echo $page_title . " - "; ?>Softwayr</title>

        <link rel="stylesheet" type="text/css" href="/assets/w3css/4.15/w3.css">
        <link rel="stylesheet" type="text/css" href="/assets/w3css/w3-colors-metro.css">
        <link rel="stylesheet" type="text/css" href="/assets/webfonts/poppins/poppins.css">

        <style>
            h1, h2, h3, h4, h5, h6, p
            {
                font-family: "Poppins", sans-serif;
            }
        </style>
    </head>

    <body class="w3-black">
        <nav class="w3-metro-darken">
            <div class="w3-content w3-bar">
                <a href="/" class="w3-bar-item w3-button">Home</a>
            </div>
        </nav>

        <header class="w3-white">
            <div class="w3-content w3-padding-16">
                <h1><b><a href="/" class="w3-button">Softwayr</a></b></h1>
            </div>
        </header>

        <main>
            <?php if( isset( $page_content ) && is_callable( $page_content ) ) $page_content(); ?>
        </main>

        <footer>
            <div class="w3-content w3-padding">
                <p class="w3-center w3-small">Copyright &copy; <a href="https://davidhunter.scot" target="_blank">David Hunter</a>.</p>
            </div>
        </footer>
    </body>
</html>
