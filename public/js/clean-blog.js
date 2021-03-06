(function($) {
  "use strict"; // Start of use strict

  // Floating label headings for the contact form
  $("body").on("input propertychange", ".floating-label-form-group", function(e) {
    $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
  }).on("focus", ".floating-label-form-group", function() {
    $(this).addClass("floating-label-form-group-with-focus");
  }).on("blur", ".floating-label-form-group", function() {
    $(this).removeClass("floating-label-form-group-with-focus");
  });

  // Show the navbar when the page is scrolled up
  var MQL = 992;

  //primary navigation slide-in effect
  if ($(window).width() > MQL) {
    var headerHeight = $("#mainNav").height();
    $(window).on("scroll", {
        previousTop: 0
      },
      function() {
        var currentTop = $(window).scrollTop();
        //check if user is scrolling up
        if (currentTop < this.previousTop) {
          //if scrolling up...
          if (currentTop > 0 && $("#mainNav").hasClass("is-fixed")) {
            $("#mainNav").addClass("is-visible");
          } else {
            $("#mainNav").removeClass("is-visible is-fixed");
          }
        } else if (currentTop > this.previousTop) {
          //if scrolling down...
          $("#mainNav").removeClass("is-visible");
          if (currentTop > headerHeight && !$("#mainNav").hasClass("is-fixed")) $("#mainNav").addClass("is-fixed");
        }
        this.previousTop = currentTop;
      });
  }

})(jQuery); 


$("body").click(function(event) {
    $('.box-comment-bg').hide()
});




/*==========General=========*/
$(".CGU").click(function(event) {
    $(".CGU").hide();
});

$(".CGU-btn").click(function(event) {
    $(".CGU").removeClass("CGU-container");
    $(".CGU").show();
});

$("#top-btn").click(function () {
    $(document).scrollTop( $("#top").offset().top-100 );
});

/*=========Forms=========*/
let x = 0;
while( x<6){

    $("."+x+".text-danger").click(function() {
        $(this).removeClass("text-danger");
    });
    x++;
}

/*======admin Forms======*/

$('#all').click(function () {
    if ($('#all').prop( "checked")) {
        $('.checkValid').prop("checked",true);
    }
    else {
        $('.checkValid').prop("checked",false);
    }
});