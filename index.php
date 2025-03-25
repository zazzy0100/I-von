
<html>
  <head>
    <title>
      hiso</title>
        <link rel="stylesheet" type="text/css" href="/Css/STYLE.css" /> 
    
  </head>
  <body>
    <header>
      I¥on
    </header>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="Lo.php" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" name="uname1" placeholder="Name" />
			<input type="email" name="email"placeholder="Email" />
			<input type="password" name="upswd1"placeholder="Password" />
			<button name="Lo">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="Connect.php" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" name="c_email"placeholder="Email" />
			<input type="password" name="c_pass" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button type="submit"name="Connect">Sign In </button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="created.html">zazzy</a>
		- copyright@_2027
		
	</p>
</footer>

<script src="Js/Script.js"></script>
  </body>
</html>