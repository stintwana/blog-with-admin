<?php 
 $user = $_SESSION['user']['username'];
?>
<div class="header">
	<div class="logo">
		<a href="<?php echo 'index.php' ?>">
		<div class="logo">
			<a href="<?php echo 'index.php' ?>">
			<div class="nav-title" style = "color:#fff;">
   !gnite
    </div>
			</a>
		</div>
		</a>
	</div>
	<div class="user-info">
		<span><i class = "fa fa-user"></i> <?php echo $user ?></span> &nbsp; &nbsp; <a href= "logout.php" class="logout-btn">logout</a>
	</div>
</div>