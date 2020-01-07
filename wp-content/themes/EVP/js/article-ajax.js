// (function ($) { 

  // jQuery(document).ready(function () {
    //   var content = $('.blog-article__container'),
    //     cat_links = $('section[id^="categories"] ul li a')
      
    //   cat_links.on('click', function (e) {
    //     e.preventDefault();
    //     var el = $(this);
    //     var href = el.attr('href');
    //     console.log(href);
    //     content.animate({ opacity: "0.5" });
    //     // content.load(href, function () {
    //     //   content.animate({ opacity: 1 });
    //     // });
    //   });
    // })
    // $('#category-menu li a').on('click', function (catID) {
    //   jQuery("a.ajax").removeClass("current");
    //   jQuery("a.ajax").addClass("current"); //adds class current to the category menu item being displayed so you can style it with css
    //   jQuery("#loading-animation").show();
    //   console.log('fired');
    //   // var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    //   jQuery.ajax({
    //     type: 'POST',
    //     url: ajaxurl,
    //     data: { "action": "load-filter", cat: catID },
    //     success: function (response) {
    //       jQuery("#category-post-content").html(response);
    //       jQuery("#loading-animation").hide();
    //       return false;
    //     }
    //   });
    // });
    function cat_ajax_get(catID, e) {
      e.preventDefault();
          console.log(catID);
          // jQuery("a.ajax").removeClass("current");
          // jQuery("a.ajax").addClass("current"); 
          jQuery("#loading-animation").show();
          console.log('fired');
    
          jQuery.ajax({
            type: 'POST',
            url: ajaxurl,
            data: { "action": "load-filter", cat: catID },
            beforeSend: function(){
              jQuery('.blog-article');
             },
            success: function (response) {
              jQuery('.blog-article').animate('opacity: 1');
              console.log(response);
              jQuery(".blog-article__container").html(response);
              jQuery("#loading-animation").hide();
              return false;
            },
            error: function (jqXHR, exception) {
              console.log('error')
              var msg = '';
              if (jqXHR.status === 0) {
                  msg = 'Not connect.\n Verify Network.';
              } else if (jqXHR.status == 404) {
                  msg = 'Requested page not found. [404]';
              } else if (jqXHR.status == 500) {
                  msg = 'Internal Server Error [500].';
              } else if (exception === 'parsererror') {
                  msg = 'Requested JSON parse failed.';
              } else if (exception === 'timeout') {
                  msg = 'Time out error.';
              } else if (exception === 'abort') {
                  msg = 'Ajax request aborted.';
              } else {
                  msg = 'Uncaught Error.\n' + jqXHR.responseText;
              }
              $('#post').html(msg);
          }
          });
        }
      // });  
    
    // })(jQuery);
    