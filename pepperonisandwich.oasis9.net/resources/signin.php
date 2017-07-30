<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pepperoni Sandwich</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body id="signin">
		<div class="container">
			<div class="center-align">
				<img id="aeva" src="https://i.aeva.co/1ee19dd5-6ba0-43c1-b135-1295941e0bbb.png">
			</div>
			<div id="login" class="card">
				<div class="card-content">
					<div class="row">
						<form id="login-form" class="col s12" action="/" method="POST">
							<input type="hidden" name="action" value="login" />
							<h4 id="ohno">Sign in</h4>
							<div class="row">
								<div class="input-field col s12 l6">
									<input id="username" name="username" type="text" tabindex="1" autofocus>
									<label for="username">Username</label>
								</div>
								<div class="input-field col s12 l6">
									<input id="password" name="password" type="password" tabindex="2">
									<label for="password">Password</label>
								</div>
							</div>
							<button id="login-btn" class="btn right" type="submit" tabindex="3">Login
								<i class="material-icons right">send</i>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/materialize/0.98.0/js/materialize.min.js"></script>
		<script src="js/signin.js"></script>
	</body>
</html>
