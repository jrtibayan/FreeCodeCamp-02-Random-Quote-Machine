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
                    <q class="quote">&nbsp;</q>
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
            <p>by <a href="http://www.jeric.rocks">Jeric Tibayan</a> | For more info <button class="more-info-btn">Click Me!</button></p>
        </footer>


        <div class="more-info">
            <div class="container">
                <h3>About this APP</h3>
                <p>This app is the 3rd project and a requirement for the Free Code Camp FRONT END Developer Certificate.</p>
                <p>This app retrieves quotes from a JSON file and will randomly pick a quote from it to be displayed. If the quote picked is the same as previous one, it will pick another till it gets a different one.</p>
                <h3>What I Used For This Project</h3>
                <ul>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>JavaScript</li>
                    <li>JQuery</li>
                </ul>
                <p>PS: For now the app only contains 7 quotes so you'll feel quotes are a little bit repetitive. Adding more quotes will solve this problem but instead of searching more of the quotes to add, I decided to leave it as is for now and continue learning.</p>
                <p>You may suggest a quote from your favorite tv/movie character by filling out the form below.</p>
                <h3>Suggest A Quote</h3>
                <form method="POST" action="https://formspree.io/jeric_tibayan-webdev@yahoo.com">
                    <input type="text" name="name" id="name" placeholder="Name">
                    <textarea rows="5" name="quote" id="quote" placeholder="Quote"></textarea>
                    <input type="submit" class="btn">
                </form>
                <button class="close-btn">CLOSE</button>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="assets/js/app.js"></script>
    </body>
</html>
