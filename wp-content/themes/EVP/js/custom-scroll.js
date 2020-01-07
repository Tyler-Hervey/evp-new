
(function ($) {

  $(document).ready(function () {

   
    $("#circle-1").show();
    $("#circle-2").show();
    $("#circle-3").show();
    $("#circle-4").show();
  
    $(window).scroll(function () { 
      
      screenWidth = $(window).width();
      if (screenWidth < 600) {
        var a = 1500;
      }
      else if (screenWidth > 600 && screenWidth < 1100) {
        var a = 900;
      }
      else {
        var a = 1200;
      }
   
      var pos = $(window).scrollTop();
      
        // console.log(pos);
    

      if(pos > a) {
        $("#circle-1 > .circle-background").addClass("circle-background-1");
        $("#circle-2 > .circle-background").addClass("circle-background-2");
        $("#circle-3 > .circle-background").addClass("circle-background-3");
        $("#circle-4 > .circle-background").addClass("circle-background-4");

        $("#circle-1>.svg-container").addClass("svg-container-tooltip-1");
        $("#circle-2>.svg-container").addClass("svg-container-tooltip-2");
        $("#circle-3>.svg-container").addClass("svg-container-tooltip-3");
        $("#circle-4>.svg-container").addClass("svg-container-tooltip-4");
        
      }
      else {
   
      }
      });
    


  });

  
  
  
const rellax = new Rellax('.rellax')


  
})( jQuery );