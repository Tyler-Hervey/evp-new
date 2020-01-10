

(function($) {
	
  $('.service-slider').slick({
    arrows: false,
    dots: false,
    variableWidth: true,
    infinite: true,
    // cssEase: 'ease',
    dotsClass: 'slider-dot--container',
    autoplay: false,
    speed: 800,
    autoplaySpeed: 1000,
    // customPaging: function (slider, i) {
    //   console.log(slider);
    //   console.log(i);
    //   return '<div class="slider--dot slider--dot-'+ (i+1) + '"><span class="dot-counter">' + 0 +(i+1) + '</span></div>';
    // },
  });

  $('.testimonial_slider').slick({
    arrows: true,
    dots: false,
    infinite: true,
    cssEase: 'ease-in-out',
    fade: true,
    speed: 500,
    autoplay: true,
    prevArrow: '<div class="testimonial_arrow testimonial_arrow--prev"></div>',
    nextArrow: '<div class="testimonial_arrow testimonial_arrow--next"></div>',

  });
	




var percentTime;
var tick;
var time = 1;
var progressBarIndex = 0;

  $('.slider-dot--container .progressBar').each(function (index) {
    // console.log(this);
    var progress = "<div class='inProgress inProgress" + index + "'></div>";
    $(this).html(progress);
});

function startProgressbar() {
    resetProgressbar();
    percentTime = 0;
    tick = setInterval(interval, 10);
}

function interval() {
    if (($('.service-slider .slick-track div[data-slick-index="' + progressBarIndex + '"]').attr("aria-hidden")) === "true") {
        progressBarIndex = $('.service-slider .slick-track div[aria-hidden="false"]').data("slickIndex");
        startProgressbar();
    } else {
        percentTime += 1 / (time + 7);
        $('.inProgress' + progressBarIndex).css({
            width: percentTime + "%"
        });
        if (percentTime >= 100) {
            $('.service-slider').slick('slickNext');
            progressBarIndex++;
            if (progressBarIndex > 2) {
                progressBarIndex = 0;
            }
            startProgressbar();
        }
    }
}

function resetProgressbar() {
    $('.inProgress').css({
        width: 0 + '%'
    });
    clearInterval(tick);
}
startProgressbar();
// End ticking machine

$('.slider-dot--container .slider--dot').click(function () {
  clearInterval(tick);
  var goToThisIndex = $(this).find("span").data("slickIndex");
  $('.service-slider').slick('slickGoTo', goToThisIndex, false);
  startProgressbar();
});

})(jQuery);