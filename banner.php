<?php if (isset($_SESSION['user']['username'])) { ?>

	<div class="banner">	
		<div class="welcome_msg">			
			<p style = "padding : 0;"> 
			<b style = "font-family: beauty;"><?php echo $appName; ?></b>
			</p>			
			<div class="logged_in_info">
		<span style = "color:#0c0c0c;font-size:13pt;"><b>welcome <?php echo $_SESSION['user']['username'] ?> </b>		
		<a href="./admin/index.php" class="btn">Go to dashboard</a> <br/>	
		<a href="./admin/logout.php">logout</a></span>	

	</div>
		</div>

		<div class="login_div">
			<img src="../../images/header/beauty.png" alt="Beauty" style = "width:100%;">
		</div>
	</div>
	
<?php }else{ ?>
	<div class="banner">
		<div class="welcome_msg">			
			<p style = "padding : 0;"> 
			<b style = "font-family: beauty;"><?php echo $appName; ?></b> <br/>
			</p>
				<p>Some atrractive text will be displayed here</p>
		</div>

		<div class="login_div">
			<img src="../../images/header/beauty.png" alt="Beauty" style = "width:100%;">
		</div>
		<a class="log" href="login.php"><i class="fa fa-bars"></i></a>
	</div>
<?php } ?>