<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:title" content="Random Quote Picker by JericT" />
        <meta property="og:description" content="This page picks a random quote that is stored in a json file. There are 7 quotes available at the moment for testing purposes only." />
        <meta property="og:image" content="http://jrtibayan.github.io/FreeCodeCamp-02-Random-Quote-Machine/assets/img/placeit.jpg" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>

        <main>
            <div class="container quote-box">

                <div class="quote-text">
                    <div class="disp-table">
                        <div>
                            <p class="disp-table-cell quote">
                                &nbsp;
                            </p>
                        </div>
                    </div>
                </div>

                <div class="quote-photo">
                        &nbsp;
                </div>

                <div class="quote-author">
                    <div class="twit btn">
                        <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
                    </div>
                    <button class="btn random">Random</button>
                    <p class="name">&nbsp;</p>
                </div>

            </div>
        </main>

        <footer>
            <p>by <em><a href="#">Jeric Tibayan</a></em></p>
        </footer>

        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

        <script>
            var lastIndex;
            var selectedIndex=0;
            var selectedQuote = {};

            function inIframe () {
                try {
                    return window.self !== window.top;
                }
                catch (e) {
                    return true;
                }
            }

            function openURL(url){
                window.open(url, 'Share', 'width=550, height=400, toolbar=0, scrollbars=1 ,location=0 ,statusbar=0,menubar=0, resizable=0');
            }

            var randomIndex = function (quotes) {
                selectedIndex = Math.floor(Math.random() * (quotes.length-1 - 0 + 1)) + 0;
            }

            var pickQuote = function () {
                $.getJSON("assets/json/quotes.json", function(json) {

                    do{
                        randomIndex(json);
                    }while(selectedIndex==lastIndex);
                    lastIndex = selectedIndex;
                    selectedQuote = JSON.parse(JSON.stringify(json[selectedIndex]));

                    /* quote */
                    $(".quote").animate(
                        {opacity: 0},
                        500,
                        function() {
                            $(this).animate(
                                {opacity: 1},
                                500
                            );
                            $(".quote").html('<i class="fa fa-quote-left"> </i>&nbsp;' + selectedQuote.quote);
                        }
                    );

                    /* image */
                    $(".quote-photo").animate(
                        {opacity: 0},
                        500,
                        function() {
                            $(this).animate(
                                {opacity: 1},
                                500
                            );
                            $(".quote-photo").css("background-image",'url("assets/img/' + selectedQuote.imageLink + '")');
                        }
                    );

                    $(".name").animate(
                        {opacity: 0},
                        500,
                        function() {
                            $(this).animate(
                                {opacity: 1},
                                500
                            );
                            /* person */
                            $(".name").html("- " + selectedQuote.person);
                        }
                    );
                });
            }

            $(document).ready(function() {

                pickQuote();

                $(".random").on("click", function(){
                    pickQuote();
                });

                $('.twit').on('click', function() {

                    if(!inIframe()) {
                        openURL('https://twitter.com/intent/tweet?hashtags=quotes&related=freecodecamp&text=' + encodeURIComponent('"' +  selectedQuote.quote.replace(/<\/?[^>]+(>|$)/g, "") + '" ' + "- " +selectedQuote.person));
                    }
                });

            });
        </script>
    </body>
</html>