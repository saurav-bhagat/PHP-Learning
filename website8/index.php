<?php
	require 'config/config.php';
	require 'config/db.php';

	$query = 'SELECT * FROM posts ORDER BY created_at desc';

	//get the results
	$result = mysqli_query($conn, $query);

	//fetch data 
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//var_dump($posts);
	//free the result
	mysqli_free_result($result);

	//close the connection
	mysqli_close($conn);

	
?>
	<?php include('inc/header.php'); ?>
	<div class="container">
		<h1>Posts</h1>
		<?php foreach($posts as $post) : ?>
			<div class="well card text-white bg-primary">
				<div class="card-header">
					<h3><?php echo $post['title']; ?></h3>
					<small>Created On <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
				</div>

				<div class="card-body">
					
					<p class=""><?php echo $post['body']; ?></p>
					<a class="btn btn-secondary" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More..</a>
				</div>
			</div><br><br>
		<?php endforeach; ?>
	</div>
	<?php include('inc/footer.php'); ?>