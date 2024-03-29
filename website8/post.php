<?php
	require 'config/config.php';
	require 'config/db.php';

	if(isset($_POST['delete'])){
		//get the form data
		$delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);


		$query = "DELETE FROM posts WHERE id={$delete_id}";
		if(mysqli_query($conn, $query)) {
			header('Location: '.ROOT_URL.'');
		} else {
			//echo 'ERROR: '. mysqli_error($conn);
		}
	}

	$id = mysqli_real_escape_string($conn, $_GET['id']);
	// echo $id;
	$query = 'SELECT * FROM posts WHERE id='.$id;

	//get the results
	$result = mysqli_query($conn, $query);

	//fetch data 
	$post = mysqli_fetch_assoc($result);
	//var_dump($posts);
	//free the result
	mysqli_free_result($result);

	//close the connection
	mysqli_close($conn);

?>
	<?php include('inc/header.php'); ?>
	<div class="container">
		<a href="<?php echo ROOT_URL ; ?>" class="btn btn-secondary">Back</a>
			<br><br>
			<div class="well card text-white bg-primary">
				<div class="card-header">
					<h1><?php echo $post['title']; ?></h1>
					<small>Created On <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
				</div>

				<div class="card-body">
					
					<p class=""><?php echo $post['body']; ?></p>
					<hr>
					<form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>"> 
						<input type="submit" name="delete" value="Delete" class="btn btn-danger">
					</form>

					<a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-secondary">Edit</a>
				</div>
			</div><br><br>
	</div>
	<?php include('inc/footer.php'); ?>