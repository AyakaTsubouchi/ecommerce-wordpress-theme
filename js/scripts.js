/*--------------------------------------
Header
-----------------------------------------------------*/

// add background color when scrolling some amount
$(document).ready(function() {
  $(window).scroll(function() {
    var scrollPos = $(document).scrollTop();
    if (scrollPos > 80) {
      $(".header-main").addClass("sticky");
      $(".addspace").addClass("sticky-body-space");
    } else {
      $(".header-main").removeClass("sticky");
      $(".addspace").removeClass("sticky-body-space");
    }
  });
});

//search bar
$(document).ready(function() {
  $(".show-on-mobile").click(function() {
    $(".show-on-pc").addClass("show");
    $(this).replaceWith("<a href='#' class='search show-on-mobile close'><i class='far fa-times-circle'></i></a>")
  });
});
$(document).ready(function() {
  $(".show-on-mobile.close").click(function() {
    $(".show-on-pc").removeClass("show");
    $(this).replaceWith("<a href='#' class='search show-on-mobile'><i class='fas fa-search'></i></a>")
  });
});



//to close an open collapsed nav when clicking the element.
$(document).ready(function() {
  $(".nav-link").click(function() {
    $(".navbar-collapse").collapse("hide");
  });
});

//to close an open collapsed nav when clicking outside of the nav elements.
$(document).ready(function() {
  $(document).click(function(event) {
    var clickover = $(event.target);
    var _opened = $("#navbarNavAltMarkup").hasClass("show");
    if (_opened === true && !clickover.hasClass("navbar-toggler")) {
      $(".navbar-toggler").click();
    }
  });
});



/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
$(document).ready(function() {
  $(".open").on("click",function() {
    $("#mySidenav").css("width","100%");
    $("#main").css("margin-left","100%");
    $("#mySidenav").addClass("side-show")
   
  })
  });
  $(document).ready(function() {
  $(".closebtn").on("click",function() {
    $("#mySidenav").css("width","0px");
    $("#mySidenav").removeClass("side-show");
    $("#main").css("margin-left","0px");
  })
  });
  
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
  // End of mobile menu 
  
  $(document).ready(function() {
    $(".sidenav .card .title")
      .on("mouseenter", function() {
        $(this).children().addClass("show");
      })
      .on("mouseleave", function() {
        $(this).children().removeClass("show");
      });
   
      
  });
  //to close an open collapsed nav when clicking outside of the nav elements.
  $(document).ready(function() {
    $(document).click(function(event) {
      var clickover = $(event.target);
      var _opened = $("#mySidenav").hasClass("side-show");
      if (_opened === true && !clickover.hasClass(".sidenav")) {
        // $("#mySidenav").css("width","0px");
        // $("#main").css("margin-left","0px");
      }
    });
  });
  
/*--------------------------------------
End of Header
-------------------------------------*/

/*--------------------------------------

/*--------------------------------------
End of Gallery page
-------------------------------------*/
/*--------------------------------------
 Contact
-------------------------------------*/
// change iframe default width and height
$(document).ready(function() {
  $(window).on("load", function() {
    $(".google-map iframe").removeAttr("width");
    $(".google-map iframe").removeAttr("height");
    $(".google-map iframe").attr("width", "100%");
    $(".google-map iframe").attr("height", "100%");
  });
});

/*--------------------------------------
End of Contact
-------------------------------------*/

/*--------------------------------------
Modal
-----------------------------------------------------*/
// disable the gallery modal on narrow screen
// $(document).ready(function() {
//   if ($(window).width() < 400) {
//     $("#gallery").removeAttr("data-target");
//   } else {
//     $("#gallery").setAttribute("data-target", "#exampleModal");
//   }
// });

$("#exampleModal").on("shown.bs.modal", function() {
  $("#myInput").trigger("focus");
});

$(".get_button_more_info").on("click", function() {
  var clickedItem = $(this).val();
  clickedItem = JSON.parse(clickedItem);

  $("#exampleModal .modal-body #modal-image").attr("src", clickedItem.img);
  $("#exampleModal .modal-body #discription").text(clickedItem.discription);
  $("#exampleModal .modal-body #postid").text(clickedItem.post_id);

  //TODO when it's deployed, change the endpoint
  const endpoint = "http://localhost:8888/wp-json/wp/v2/gallery?exclude=";
  fetch(endpoint + clickedItem.post_id)
    .then((response) => response.json())
    .then((myJSON) => {
      if (myJSON) {
        for (let i = 0; i < myJSON.length; i++) {
          $("#carouselExample .carousel-inner").append(`
    <div class='carousel-item carousel_one closed-reset'>
      <img src=${myJSON[i].fimg_url} alt="nice dishes">
      <p>${myJSON[i].title.rendered}</p>
   
    </div>
    `);
        }
      }
    });
});

//reset the "active" position when closing the modal.
$("#exampleModal").on("hidden.bs.modal", function() {
  var firstItem = $(this).find(".carousel-item:first");
  if (!firstItem.hasClass("active")) {
    firstItem.addClass("active");
  }
  $(".closed-reset").remove();
});

/*--------------------------------------
End of Modal
-------------------------------------*/

