var loadedTransport = false;

var error = function() {
  $("#load").text("Failed to load vital site component: " + error.state + "!");
}

var load;
get("load", function(data) {
  load = data;
  $(function() {
    $("#load").hide().css("visibility", "").html(load).fadeIn(250);

    navigate("home", function() {
      loadedTransport = true;
      ready();
    }, error);
  });
}, function(err) {
  error();
});

$(function() {
  $("[data-navigate]").click(function() {
    var page = $(this).attr("data-navigate");
    navigate(page);
  });
});

function navigate(page, success, error) {
  $("main").fadeOut(500, function() {
    $(this).empty();
  });
  $("#load").fadeIn(250);
  get(page, function(data) {
    setTimeout(function() {
      $("#load").fadeOut(250);
      $("main").html(data).fadeIn(500, function() {
        if (success != undefined)
          success();
      });
    }, 750);
  }, function(error) {
    setTimeout(function() {
      $("#load").fadeOut(250);
      $("main").text("A " + error.status + " error occurred.").fadeIn(500, function() {
        if (error != undefined)
          error();
      });
    }, 750);
  });
}

function get(page, success, error) {
  $.ajax({
    url: "auth",
    method: "POST",
    data: "action=navigate&page=" + page,
    success: success,
    error: error
  });
}
