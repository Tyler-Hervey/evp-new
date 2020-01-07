

(function($) {

  $(document).ready(function() {    

    $('#tabs li a:not(:first)').addClass('inactive');
    $('.tab-content-container').hide();
    $('.tab-content-container:first').show();
        

    if (window.location.href.indexOf("tab2C") > -1) {
      var t = "tab2";
      $('#tabs li a').addClass('inactive');    
      $("#tab2").removeClass('inactive');
      
        $('.tab-content-container').hide();
        $('#'+ t + 'C').fadeIn('slow');
   }
    $('#tabs li a').click(function () {

        var t = $(this).attr('id');
      if($(this).hasClass('inactive')){ //this is the start of our condition 
        $('#tabs li a').addClass('inactive');           
        $(this).removeClass('inactive');
        
        $('.tab-content-container').hide();
        $('#'+ t + 'C').fadeIn('slow');
     }
    });
    
    });

})( jQuery );
