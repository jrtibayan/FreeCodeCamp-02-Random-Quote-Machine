<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:title" content="Random Quote Picker by JericT" />
        <meta property="og:description" content="This page picks a random quote that is stored in a json file. There are 7 quotes available at the moment for testing purposes only." />
        <meta property="og:image" content="http://jrtibayan.github.io/FreeCodeCamp-02-Random-Quote-Machine/assets/img/placeit.jpg" />

        <link rel="stylesheet" href="assets/css/normalize.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>

        <main>
            <!-- QUOTE & CHARACTER-->
            <div class="quote-container Aligner">
                <div class="Aligner-item Aligner-item--top"></div>
                <div class="quote-with-name Aligner-item">
                    <p class="quote">&nbsp;</p>
                    <p class="name">&nbsp;</p>
                </div>
                <div class="Aligner-item Aligner-item--bottom"></div>
            </div>

            <!-- PHOTO -->
            <div class="photo">&nbsp;</div>

            <!-- BUTTONS -->
            <div>
                <div class="btn twit">
                    <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
                </div>
                <button class="btn random">Random</button>
            </div>
        </main>


        <div class="spinner-container">
            <div class="loader">
                <div class="loading-text">Loading</div>
            </div>
        </div>


        <footer class="app-info">

            <p>Designed and Developed with Love</p>
            <p>by Jeric Tibayan</p>
            <p>Check my profile on <a href="www.jeric.rocks">www.jeric.rocks</a></p>
            -->
        </footer>

        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="assets/js/app.js"></script>
    </body>
</html>
