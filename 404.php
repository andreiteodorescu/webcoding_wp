
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>404 - Page not found</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
  <style>
	  
	  body{
		  text-align: center;
	  }

	  .container-error {
		  position: absolute;
		  top: 0;
		  bottom: 0;
		  margin: auto 0;
		  width: 100%;
		  height: 425px;
	  }
	  
	  .error-title {
		  font-size: 36px;
		  margin: 0 0 30px;
	  }
	  
	  .error-paragraph {
		  font-size: 20px;
		  margin: 0 0 30px;
	  }
	  
	  .error-paragraph a:hover {
		  text-decoration: underline;
	  }
	  
	@media only screen and (max-width: 48em) { /* 768px */

		.container-error {
			height: auto;
			padding-top: 60px;
		}

		.error-title {
			font-size: 32px;
		}

	}

	@media only screen and (max-width: 30em) { /* 480px */

		.error-title {
			font-size: 26px;
		}

	}

  </style>
</head>

<body>

	<div class="container-error">
		<h4 class="error-title">Oops! The page you requested was not found.</h4>
		<p class="error-paragraph">Go to homepage by <a href="/" title="Go to homepage">clicking here</a>.</p>
		<a href="/" title="Go to homepage"><img src="<?php bloginfo('template_directory'); ?>/images/webcoding.png" alt="WebCoding" width="200"></a>
	</div>

</body>
</html>
