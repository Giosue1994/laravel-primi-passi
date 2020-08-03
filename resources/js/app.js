require('./bootstrap');
import 'bootstrap';
var $ = require( "jquery" );

$(document).ready(function() {

  $('.faq-box').click(function() {
    $(this).find('.answer-toggleable').slideToggle();
    $(this).find('i').toggleClass('fa-plus').toggleClass('fa-minus');
  });

});
