var connected = false;
var disconnected = false;
var verified = false;
var ws;
var imagesReady = false;

$(function() {
	$("#login-form").submit(function(event) {
		event.preventDefault();
		$.ajax({
			url: "auth",
			method: "POST",
			data: "username=" + $("#username").val() + "&password=" + $("#password").val(),
			beforeSend: function() {
				$("#username").prop("disabled", true);
				$("#password").prop("disabled", true);
				$("#login-btn").prop("disabled", true);
			},
			success: function(data) {
				console.log(data);
				$("#username").addClass("valid");
				$("#password").addClass("valid");
				window.location="/";
			},
			error: function() {
				$("#username").addClass("invalid");
				$("#password").addClass("invalid");
				
				setTimeout(function() {
					$("#username").removeClass("invalid");
					$("#password").removeClass("invalid");
					$("#password").val("");
					$("#username").prop("disabled", false);
					$("#password").prop("disabled", false);
					$("#login-btn").prop("disabled", false);
					if ($("#username").val() == "")
						$("#username").focus();
					else if ($("#password").val() == "")
						$("#password").focus();
				}, 1000);
			}
		});
		return false;
		/*$.removeCookie("PHPSESSID");
		$(this).text("Login");
		$(this).parents("li.active").first().removeClass("active");
		$(this).attr("id", "");
		$(this).off('click');
		$(this).click(function() {
			$('#login').modal('open');
		});*/
	});
});
