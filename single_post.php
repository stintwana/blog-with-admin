<?php  include('dbConfig.php'); ?>
<?php  include('functions.php'); ?>
<?php 
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$topics = getAllTopics();
?>
<?php include('header.php'); ?>

<title> <?php  echo $post['title'] ?></title>
</head>
<body>
<?php require_once 'user_header.php'; ?>
<br>
<div class="container">
	<!-- Navbar -->
		<?php // include( ROOT_PATH . '/nav.php'); ?>
	<!-- // Navbar -->
	
	<div class="content" >
		<!-- Page wrapper -->
		<div class="post-wrapper">
			<!-- full post div -->
			<div class="full-post-div">
			<?php if ($post['published'] == false): ?>
				<h2 class="post-title">Sorry... This post has not been published</h2>
			<?php else: ?> 
				<h2 class="post-title"><?php echo $post['title']; ?></h2>
				<div class="author">
					Written by: <?php echo $post['name_surname'] ?>
				</div><br>
				<div class="share-icons"> Share this post: <br>
					<i class="fa fa-facebook"></i>
					<i class = "fa fa-twitter"></i>
					<i class = "fa fa-whatsapp"></i>
				</div><br>

				<div class="post-body-div">
					<?php echo html_entity_decode($post['body']); ?>
				</div>

							<!-- comments section -->
		
			<div class="comments"></div>

<script>
const comments_page_id = 3; // This number should be unique on every page
fetch("comments.php?page_id=" + comments_page_id).then(response => response.text()).then(data => {
	document.querySelector(".comments").innerHTML = data;
	document.querySelectorAll(".comments .write_comment_btn, .comments .reply_comment_btn").forEach(element => {
		element.onclick = event => {
			event.preventDefault();
			document.querySelectorAll(".comments .write_comment").forEach(element => element.style.display = 'none');
			document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "']").style.display = 'block';
			document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "'] input[name='name']").focus();
		};
	});
	document.querySelectorAll(".comments .write_comment form").forEach(element => {
		element.onsubmit = event => {
			event.preventDefault();
			fetch("comments.php?page_id=" + comments_page_id, {
				method: 'POST',
				body: new FormData(element)
			}).then(response => response.text()).then(data => {
				element.parentElement.innerHTML = data;
			});
		};
	});
});
</script>
			<?php endif ?>		

			</div>
			<!-- // full post div -->
			

		</div>
		<!-- // Page wrapper -->

		<!-- post sidebar -->
		<div class="post-sidebar">
			<h3 align = 'center'>More posts</h3>
			<div class="card">
				<div class="card-header">
					<h2>Topics</h2>
				</div>
				<div class="card-content">
					<?php foreach ($topics as $topic): ?>
						<a 
							href="<?php echo 'filtered_posts.php?topic=' . $topic['id'] ?>">
							<?php echo $topic['name']; ?>
						</a> 
					<?php endforeach ?>
				</div>
			</div>
		</div>
		<!-- // post sidebar -->
	</div>
</div>
<!-- // content -->

<?php // include( ROOT_PATH . '/includes/footer.php'); ?>