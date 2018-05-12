<?php 
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP BLOG</title>
		<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/journal/bootstrap.min.css">
	</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="#">Navbar</a>
 	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
    	<span class="navbar-toggler-icon"></span>
  	</button>

  	<div class="collapse navbar-collapse" id="navbarColor02">
    	<ul class="navbar-nav mr-auto">
      		<li class="nav-item active">
        		<a class="nav-link" href="<?php echo ROOT_URL; ?>">Home <span class="sr-only">(current)</span></a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="<?php echo ROOT_URL; ?>addpost.php">Add Post</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="#">Pricing</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="#">About</a>
      		</li>
    	</ul>
  	</div>
</nav>
<br><br>