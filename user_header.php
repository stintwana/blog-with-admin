<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title" style = "color:#fff;">
   <a href = "index.php" style = "color:#fff;">!gnite</a>
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <div class="nav-links">
    <a href="index.php">Home</a>
<!--dropdown menu-->
    <div class="dropdown show">
      <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style = "color:#fff">
       Topics
      </a>
      <div class="dropdown-menu" aria-labelledby="dropDownMenuLink">
      <?php foreach ($topics as $topic): ?>
<a class = "dropdown-item"
		href="<?php echo 'filtered_posts.php?topic=' . $topic['id'] ?>">
		<?php echo $topic['name']; ?>
	</a>
<?php endforeach ?>
      </div>
    </div>

    

   <!-- <a href="videos.php">Videos</a>
    <a href="https://codepen.io/jo_Geek/">Podcasts</a>
    <a href="https://jsfiddle.net/user/jo_Geek/" style = "background-color:#fff;color:#333;padding:7px!important; margin-right:5px;">Subsribe</a>-->
  </div>
</div>
<br><br>
<style>
  @font-face {
	font-family: nexa;
	src: url("../../fonts/NexaBold.otf");
}

    * {
  box-sizing: border-box;
}

body {
  margin: 0px;
  font-family: 'segoe ui';
}

.nav {
  height: 70px;
  width: 100%;
  background-color: #bb2032;
  position: fixed;
  z-index: 1;
  box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
}

.nav > .nav-header {
  display: inline;
}
.dropdown-menu a{
  color:#0c0c0c!important;
}
.nav > .nav-header > .nav-title {
  display: inline-block;
  font-size: 28pt;
  color: #fff;
  padding: 10px 10px 10px 10px;
  font-family:nexa;
  font-weight: bold;
}

.nav > .nav-btn {
  display: none;
}

.nav > .nav-links {
  display: inline-flex;
  position: absolute;
  right: 20px;
  font-size: 18px;
}

.nav > .nav-links > a, .dropdown a {
  display: inline-block;
  padding: 13px 10px 13px 20px;
  text-decoration: none;
  color: #fff;
  font-weight: 600;
}

.nav > .nav-links > a:hover, .dropdown a:hover{
  background-color: rgba(0, 0, 0, 0.3);
}

.nav > #nav-check {
  display: none;
}

@media (max-width:600px) {
  .nav > .nav-btn {
    display: inline-block;
    position: absolute;
    right: 0px;
    top: 0px;
  }

  .nav > .nav-btn > label {
    display: inline-block;
    width: 50px;
    height: 50px;
    padding: 13px;
  }
  .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
    background-color: rgba(0, 0, 0, 0.3);
  }
  .nav > .nav-btn > label > span {
    display: block;
    width: 25px;
    height: 10px;
    border-top: 2px solid #eee;
  }
  .nav > .nav-links {
    position: absolute;
    display: block;
    width: 100%;
    background-color: #333;
    height: 0px;
    transition: all 0.3s ease-in;
    overflow-y: hidden;
    top: 70px;
    left: 0px;
  }
  .nav > .nav-links > a {
    display: block;
    width: 100%;
  }
  .nav > #nav-check:not(:checked) ~ .nav-links {
    height: 0px;
  }
  .nav > #nav-check:checked ~ .nav-links {
    height: calc(100vh - 50px);
    overflow-y: auto;
  }
}
</style>