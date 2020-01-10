
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
                  msg = 'Not connected.\n Verify Network.';
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
              jQuery('.blog-article__container').html(msg);
          }
          });
        }

    