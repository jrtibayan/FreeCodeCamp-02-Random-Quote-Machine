var lastIndex;
var selectedIndex=0;
var selectedQuote = {};

function inIframe () {
    try { return window.self !== window.top; }
    catch (e) { return true; }
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

        /* hide quote */
        $(".quote-text").animate({opacity: 0}, 500);

        /* hide image */
        $(".photo").animate({opacity: 0}, 500);

        /* hide person */
        $(".name").animate({opacity: 0}, 500);

        /* display loading */
        $('.spinner-container').css('display', 'flex');
        $('.spinner-container').animate(
            {opacity: 1},
            500,
            function() {

                var img = new Image();
                // this will be triggered after the image is successfully loaded
                img.onload = function() {
                    // show photo
                    $(".photo").animate({opacity: 1}, 500);
                    $(".photo").css("background-image",'url("assets/img/' + selectedQuote.imageLink + '")');

                    // show name
                    $(".name").animate({opacity: 1}, 500);
                    $(".name").html("- " + selectedQuote.person);

                    // show quote
                    $(".quote-text").animate({opacity: 1}, 500);
                    $(".quote").html('<i class="fa fa-quote-left"> </i>&nbsp;' + selectedQuote.quote);

                    // remove the loading div
                    $('.spinner-container').animate(
                        {opacity: 0},
                        500,
                        function() {
                            $('.spinner-container').css('display', 'none');
                        }
                    );
                };
                // after showing loading div load the image
                img.src = 'assets/img/' + selectedQuote.imageLink;
            }
        );
    });
}

$(document).ready(function() {

    // picks the first quote to display after load
    pickQuote();


    // if random button is clicked pick a new quote
    $(".random").on("click", function(){
        pickQuote();
    });

    // tweet the displayed quote
    $('.twit').on('click', function() {
        if(!inIframe()) {
            openURL('https://twitter.com/intent/tweet?hashtags=quotes&related=freecodecamp&text=' + encodeURIComponent('"' +  selectedQuote.quote.replace(/<\/?[^>]+(>|$)/g, "") + '" ' + "- " +selectedQuote.person));
        }
    });

    // show the info section
    $('.more-info-btn').click(function() {
        $(".more-info").animate({top: 0}, 500);
    });

    // close the info section
    $('.close-btn').click(function() {
        console.log('hello');
        $(".more-info").animate({opacity: 0}, 500, function() {
            $('.more-info').css('opacity', '1');
            $('.more-info').css('top', '100vh');
        });
    });

});

