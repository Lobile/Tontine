$( document ).ready(function () {
    $(".moreBox").slice(0, 9).show();
      if ($(".blogBox:hidden").length != 0) {
        $("#loadMore").show();
      }   
      $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".moreBox:hidden").slice(0, 12).slideDown();
        if ($(".moreBox:hidden").length == 0) {
          $("#loadMore").fadeOut('slow');
        }
      });
    });