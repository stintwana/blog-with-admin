<?php
require_once 'dbConfig.php';
require_once( ROOT_PATH . '/registration_login.php');
require_once 'header.php';
require_once 'functions.php';
$appName = "!gnite";
//include('banner.php');
//Retrieve all posts from database  
 $posts = getPublishedPosts();
  ?>
<?php 
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$topics = getAllTopics();
?>

<title>!gnite| Home </title>
</head>
<body>
	<?php require_once 'user_header.php';?>
	<br><br>
<div class="social_nav">
                <span class="titles">Our Socials</span>
                    <ul>	
                        <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-rss"></i></a></li>
                    </ul>
            </div>
 <h1 class="heading" align = "center">Trending Articles</h1>

<div class="container">
	<div class="row-content"> <?php foreach ($posts as $post): ?>
	<div class="post" >
        <!-- Added this if statement... -->
		<?php if(isset($post['topic']['name'])): ?>
			<a 
				href="<?php echo './filtered_posts.php?topic=' . $post['topic']['id'] ?>"
				class="btn category">
				<?php echo $post['topic']['name'] ?>
			</a>
		<?php endif ?>

	
		<img src="<?php echo 'images/' . $post['image']; ?>" class="post_image" alt="image" style = "width:100%;border-radius:10px;">
			<div class="post_info">
				<h5 style = "font-weight: 600;">
					<a style = "color:#0c0c0c;" href="single_post.php?post-slug=<?php echo $post['slug']; ?> ">
				<?php echo $post['title'] ?>
					</a>
			</h5><br>
				<div class="info">
					<span class = "date"><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
					
					<?php
					
    // Get the total number of comments
    $stmt = $db->prepare('SELECT COUNT(*) AS total_comments FROM comments WHERE page_id = ?');
	//$stmt->bind_param("i", $_GET['page_id']);
    $stmt->execute();
    $comments_info = $stmt->fetch();
	?>
					<!--<span class="comments"><i class = "fa fa-comments-o" style = "margin-left: 20px;"></i>    <span class="total"><//?=$comments_info['total_comments']?></span></span> --> 
					<span class="read_more">by: <?php echo $post['name_surname'] ?> </span>
				</div>
			</div>

	</div>
	

<?php endforeach ?>   
</div>
</div>

<div class="ad-section">
	<div class="ad-background">
	<h4 align = "center" >Advertisement</h4>
	</div>

</div>

<div class="tab_bg">
            	<h4 class="page_title">Topics</h4>
				<ul class="the-collection">
<?php foreach ($topics as $topic): ?>
	<li><a 
		href="<?php echo 'filtered_posts.php?topic=' . $topic['id'] ?>">
		<?php echo $topic['name']; ?>
	</a> </li>
<?php endforeach ?>

    </ul>
            </div>

</body>
</html>