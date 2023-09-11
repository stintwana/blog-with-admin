<? session_start(); ?>
<?php  include('dbConfig.php'); ?>
<?php  include('registration_login.php'); ?>
<?php  include('header.php'); ?>
	<title>Ignite | Log in </title>
</head>
<body>
<div class="container" style = "width:100%!important;">

	<div style="width: 100%; margin: 20px auto;">
	<div class="banner">
		<div class="welcome_msg">			
			<p style = "padding : 0;font-family:nexa;"> 
			<b>!gnite Login</b> <br/>
			</p>		
			<form method="post" action="login.php" >
			<?php include(ROOT_PATH . '/errors.php') ?>
			<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username" style = "border-bottom: 2px solid #bb2032; background-color:white;">
			<input type="password" name="password" placeholder="Password"  style = "border-bottom: 2px solid #bb2032; background-color:white;">
			<button type="submit" class="btn" style = "background-color: #bb2032; cursor: pointer;" name="login_btn">Login</button>
			<p style = "font-size: 14pt;display:inline-flex;">
				Keep me logged in <input type = "Checkbox">
			</p>
		</form></div>
		</div>

	</div>

	</div>
</div>
<!-- // container -->

<!-- Footer -->
	<?php //include( ROOT_PATH . '/includes/footer.php'); ?>
<!-- // Footer -->