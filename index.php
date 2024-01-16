<?php require('src/login.php');
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/form.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="web/dist/swagger-ui.css" >
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <style>
      html
      {
        box-sizing: border-box;
        overflow: -moz-scrollbars-vertical;
        overflow-y: scroll;
      }
      *,
      *:before,
      *:after
      {
        box-sizing: inherit;
      }

      body
      {
        margin:0;
        background: #fafafa;
      }
    </style>
</head>
<body>
	<div id="swagger-ui"></div>
    <script src="https://unpkg.com/swagger-ui-dist@3.12.1/swagger-ui-standalone-preset.js"></script>
    <script src="https://unpkg.com/swagger-ui-dist@3.12.1/swagger-ui-bundle.js"></script>
    <script>
    window.onload = function() {
      // Begin Swagger UI call region
        console.log(window.location.pathname);
      const ui = SwaggerUIBundle({
        url: window.location.href + "/swagger.yaml",
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

</body>
</html>

