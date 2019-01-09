var API;

$(document).ready(function() {
  $('#my-menu').mmenu();
  API = $('#my-menu').data('mmenu');
});

$(document).on('click', '#menu-button', function () {
  API.open();
});

var API2;

$(document).ready(function() {
  $('#my-menu2').mmenu({
           "extensions": [
          "position-right"
       ]
  });
  API2 = $('#my-menu2').data('mmenu');
});

$(document).on('click', '#menu-button2', function () {
  API2.open();
});
