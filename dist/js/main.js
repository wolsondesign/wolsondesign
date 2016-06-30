// Responsive navigation
$(document).ready(function() {
  $('body').addClass('js');
  var $menu = $('#menu'),
    $menulink = $('.menu-link');
  
  $menulink.click(function() {
    $menulink.toggleClass('active');
    $menu.toggleClass('active');
    return false;
  });
});

// contact form and floating labels 
jQuery(document).ready(function($){
  if( $('.floating-labels').length > 0 ) floatLabels();

  function floatLabels() {
    var inputFields = $('.floating-labels .cd-label').next();
    inputFields.each(function(){
      var singleInput = $(this);
      //check if user is filling one of the form fields 
      checkVal(singleInput);
      singleInput.on('change keyup', function(){
        checkVal(singleInput);  
      });
    });
  }

  function checkVal(inputField) {
    ( inputField.val() == '' ) ? inputField.prev('.cd-label').removeClass('float') : inputField.prev('.cd-label').addClass('float');
  }
  
  //form validation
  $('#contact-form').validate({
      rules: {
        Name: {
          required: true,
          minlength: 5
        },
        Email: {
          required: true,
          email: true    
        }
        
      }
    });
  
});