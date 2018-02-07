$(document).ready(function() {
  // if (sessionStorage.getItem('splashScreen') !== 'true') {

  var quotes = [
    {
      quote: "Sorry to interrupt Sad Breakfast Club",
      author: "Cheryl"
    },
    {
      quote: "Don't look at me with those judgy little eyes.",
      author: "Damon"
    },
    {
      quote: "Once you've accepted your flaws, no one can use them against you",
      author: "Tyrion"
    }
  ];
  var randomQuote = quotes[Math.floor(Math.random() * quotes.length)];


    $('body').prepend('<header id="splashScreen"></header>');
    $('#splashScreen').prepend('<blockquote></blockquote>');
    $('blockquote').prepend('<p id="quote"></p>');
    $('blockquote').append('<footer id="author"></footer>');
    $('#quote').html(randomQuote.quote);
    $('#author').html(randomQuote.author);
    // $("#splashScreen").show().delay(2500).fadeOut();
    sessionStorage.setItem('splashScreen', 'true');
  // }
});
