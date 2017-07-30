var connected = false;
var disconnected = false;
var ws;

var loadedConnection = false;
var loadedImages = false;

$(function() {
	$.ajax({
		url: "auth",
		method: "POST",
		data: "action=connect",
		success: function(data) {
			console.log(data);
			loadedConnection = true;
			ready();
		},
		error: function() {
			$("#load .indeterminate").addClass("determinate red").removeClass("indeterminate").css("width", "100%");
			$("#load-text").html("Failed to connect!");
		}
	});

	$(window).on("load", function() {
		loadedImages = true;
		ready();
	});

	$('#hamburger').sideNav({
      menuWidth: 260,
      edge: 'left',
      closeOnClick: true,
      draggable: true
    }
  );

	/*$("a").hover(function() {
		$(this).parents("li").remove();
	});*/

	$("[data-action]").click(function() {
		$.ajax({
			url: "auth",
			method: "POST",
			data: "action=" + $(this).attr("data-action"),
			beforeSend: function() {
				$("[data-action=" + $(this).attr("data-action") + "]").prop("disabled", true);
			},
			success: function(data) {
				console.log(data);
				window.location="/";
			},
			error: function() {
				$("[data-action=" + $(this).attr("data-action") + "]").prop("disabled", false);
			}
		});
	});
});

var ready = function() {
	if (loadedConnection && loadedTransport && loadedImages)
		setTimeout(function() {
			$("#load").fadeOut(250);
			$("#wrapper").hide().css("visibility", "").fadeIn(500);
		}, 1500);
};
