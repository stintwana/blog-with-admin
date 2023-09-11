<?php  include('../dbConfig.php'); ?>
<?php  include(ROOT_PATH . '/admin/admin_functions.php'); ?>
<?php  include(ROOT_PATH . '/admin/post_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/header_admin.php'); ?>
<!-- Get all topics -->
<?php $topics = getAllTopics();	?>
	<title>Admin | Create Post</title>
</head>
<body>
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/navbar.php') ?>

	<div class="container content">
		<!-- Left side menu -->
		<?php include(ROOT_PATH . '/admin/menu.php') ?>

		<!-- Middle form - to create and edit  -->
		<div class="action create-post-div">
			<h1 class="page-title">Create/Edit Post</h1>
			<form method="post" enctype="multipart/form-data" action="<?php echo 'create_post.php'; ?>" >
				<!-- validation errors for the form -->
				<?php include('../errors.php') ?>

				<!-- if editing post, the id is required to identify that post -->
				<?php if ($isEditingPost === true): ?>
					<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
				<?php endif ?> 

				<input type="text" name="title" value="<?php echo $title; ?>" placeholder="Title">
				<label style="float: left; margin: 5px auto 5px;">Featured image</label>
								<!-- if editing post, display the update button instead of create button -->
				<?php if ($isEditingPost === true): ?> 
					<div class="imgContainer" style = "width: 30%;">
					<img src="<?php echo "../images/" . basename($featured_image); ?> " style = "width: 100%;" alt="featured image">
					</div>
				<?php else: ?>
				<input type="file" name="featured_image" >
				<?php endif ?>

					<script>
  new FroalaEditor('.selector', {
    // Set the image upload parameter.
    imageUploadParam: 'image_param',

    // Set the image upload URL.
    imageUploadURL: '/upload_image',

    // Additional upload params.
    imageUploadParams: {id: 'my_editor'},

    // Set request type.
    imageUploadMethod: 'POST',

    // Set max image size to 5MB.
    imageMaxSize: 5 * 1024 * 1024,

    // Allow to upload PNG and JPG.
    imageAllowedTypes: ['jpeg', 'jpg', 'png'],

    events: {
      'image.beforeUpload': function (images) {
        // Return false if you want to stop the image upload.
      },
      'image.uploaded': function (response) {
        // Image was uploaded to the server.
      },
      'image.inserted': function ($img, response) {
        // Image was inserted in the editor.
      },
      'image.replaced': function ($img, response) {
        // Image was replaced in the editor.
      },
      'image.error': function (error, response) {
        // Bad link.
        //if (error.code == 1) { ... }

        // No link in upload response.
        //else if (error.code == 2) { ... }

        // Error during image upload.
       // else if (error.code == 3) { ... }

        // Parsing response failed.
       // else if (error.code == 4) { ... }

        // Image too text-large.
       // else if (error.code == 5) { ... }

        // Invalid image type.
      //  else if (error.code == 6) { ... }

        // Image can be uploaded only to same domain in IE 8 and IE 9.
       // else if (error.code == 7) { ... }

        // Response contains the original server response to the request if available.
      }
    }
  })
</script>
			<textarea name="body" id="froala" cols="30" rows="10"><?php echo $body; ?></textarea>
				<select name="topic_id">
					<?php if($isEditingPost == true): ?>
					<?php foreach ($topics as $topic): ?>
						<option  value = "<?php echo $topic['id']; ?>">
						<?php echo $topic['name']; ?>
					</option>
					<?php endforeach ?>
						<?php else: ?>
					<option value="" selected disabled>Choose topic</option>
					<?php foreach ($topics as $topic): ?>
						<option value="<?php echo $topic['id']; ?>">
							<?php echo $topic['name']; ?>
						</option>
					<?php endforeach ?>
					<?php endif ?>
				</select>
				
				<!-- Only admin users can view publish input field -->
				<?php if ($_SESSION['user']['role'] == "Admin"): ?>
					<!-- display checkbox according to whether post has been published or not -->
					<?php if ($published == true): ?>
						<label for="publish">
							Publish
							<input type="checkbox" value="1" name="publish" checked="checked">&nbsp;
						</label>
					<?php else: ?>
						<label for="publish">
							Publish
							<input type="checkbox" value="1" name="publish">&nbsp;
						</label>
					<?php endif ?>
				<?php endif ?>
				
				<!-- if editing post, display the update button instead of create button -->
				<?php if ($isEditingPost === true): ?> 
					<button type="submit" class="btn" name="update_post">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_post">Save Post</button>
				<?php endif ?>

			</form>
		</div>
		<!-- // Middle form - to create and edit -->
	</div>
</body>
</html>

<script> var editor = new FroalaEditor('#froala'); </script>