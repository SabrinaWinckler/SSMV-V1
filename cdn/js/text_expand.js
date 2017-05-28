// Green Button Js
$('#expand-green').on('click', function() {
  $(this).toggleClass('close-green');
  $('.text').toggleClass('open-green')
  .end();
});

// Red Button JS
$('#expand-red').on('click', function() {
  $(this).toggleClass('close-red');
  $('.text').toggleClass('open-red')
});

// Blue Button JS
$('#expand-sky').on('click', function() {
  $(this).toggleClass('close-sky');
  $('.text').toggleClass('open-sky');
});