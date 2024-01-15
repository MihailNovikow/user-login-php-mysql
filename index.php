<?php require('src/login.php');
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/form.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="swagger-ui"></div>
    
	<div class="phppot-container tile-container">

		<form name="frmUser" method="post" action="">
			<div class="message text-center"><?php if($message!="") { echo $message; } ?></div>

			<h1 class="text-center">Login</h1>

			<div>
				<div class="row">
					<label> Username </label> <input type="text" name="userName"
						class="full-width" " required>
				</div>
				<div class="row">
					<label>Password</label> <input type="password" name="password"
						class="full-width" required>
				</div>
				<div class="row">
					<input type="submit" name="submit" value="Submit"
						class="full-width ">
				</div>
			</div>
		</form>
	</div>
	</div>
	<script src="https://unpkg.com/swagger-ui-dist@3.12.1/swagger-ui-standalone-preset.js"></script>
    <script src="https://unpkg.com/swagger-ui-dist@3.12.1/swagger-ui-bundle.js"></script>
    <script>
    window.onload = function() {
      // Begin Swagger UI call region
        console.log(window.location.pathname);
      const ui = SwaggerUIBundle({
        url: window.location.href + "swagger.yaml",
        dom_id: '#swagger-ui',
        deepLinking: true,
          presets: [
              SwaggerUIBundle.presets.apis,
              SwaggerUIStandalonePreset
          ],
          layout: "StandaloneLayout"
      })
      // End Swagger UI call region
      window.ui = ui
    }
  </script>

</body>
</html>

