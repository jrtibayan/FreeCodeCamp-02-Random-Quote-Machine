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