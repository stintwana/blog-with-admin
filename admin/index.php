<?php  include('../dbConfig.php'); ?>
	<?php include(ROOT_PATH . '/admin/admin_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/header_admin.php'); ?>
	<?php
	if(!isset($_SESSION['user'])){
		header('location:../login.php');
	}
	?>
	<title>Admin | Dashboard</title>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo 'dashboard.php' ?>">
			<div class="nav-title" style = "color:#fff;">
   !gnite
    </div>
			</a>
		</div>
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
				<a href="<?php echo 'logout.php'; ?>" class="logout-btn">logout</a>
			</div>
		<?php endif ?>
	</div>
	<div class="container dashboard">
		<h1>Welcome</h1>
		<div class="stats">
			<a href="users.php" >
				<span>Registered users</span>
			</a>
			<a href="posts.php">
				<span>Manage Posts</span>
			</a>
			<a href = "topics.php">
				<span>Manage Topics</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons">
			<a href="users.php">Add Users</a>
			<a href="posts.php">Add Posts</a>
		</div>
	</div>
</body>
</html>