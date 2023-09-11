<?php  include('dbConfig.php'); ?>
<!-- Source code for handling registration and login -->
<?php  include('registration_login.php'); ?>

<?php include('header.php'); ?>
<title>LifeBlog | Register </title>
</head>
<div class="banner">
		<div class="welcome_msg">			
			<p style = "padding : 0;"> 
			<b style = "font-family: beauty;">Hlamvus Blog</b> <br/>

			<div class="btn"  style = "background-color: #91765f;">
<div style="width: 100%; margin: 20px auto;">
	<form method="post" action="register.php" >
		<h2>Register on LifeBlog</h2>
		<?php include(ROOT_PATH . '/errors.php') ?>
		<input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username" style = "border-bottom: 2px solid #836c58; background-color:white;">
		<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email" style = "border-bottom: 2px solid #836c58; background-color:white;">
		<input type="password" name="password_1" placeholder="Password" style = "border-bottom: 2px solid #836c58; background-color:white;"> 
		<input type="password" name="password_2" placeholder="Password confirmation" style = "border-bottom: 2px solid #836c58; background-color:white;">
		<button type="submit"  class="btn" name="reg_user"  style = "background-color: #836c58; cursor: pointer;" >Register</button>
		<p style = "font-size:17px;">
			Already a member? <a href="login.php"  style = "background-color: #836c58; color:#f1f1ff; font-size: 12pt;">Sign in</a>
		</p>
	</form>
</div>
</div>
		</div>

		<div class="login_div">
			<img src="../../images/header/beauty.png" alt="Beauty" style = "width:100%;">
		</div>
		<a class="log" href="login.php"><i class="fa fa-user"></i></a>
	</div>
<body>

<!-- // container -->
<!-- Footer -->
	<?php //include( ROOT_PATH . '/includes/footer.php'); ?>
<!-- // Footer -->