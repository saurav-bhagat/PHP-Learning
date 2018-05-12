<?php include 'server_info.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>System Info</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>	
	<div class="container">
		<h1>Server & File Info</h1>

		<?php if($server): ?>
			<ul class="list-group">
				<?php foreach ($server as $key => $value): ?> 
					<li class="list-group-item">
						<strong><?php echo $key; ?>: </strong>
						<?php echo $value; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		<br><br>
		<h1>Client & File Info</h1>

		<?php if($client): ?>
			<ul class="list-group">
				<?php foreach ($client as $key => $value): ?> 
					<li class="list-group-item">
						<strong><?php echo $key; ?>: </strong>
						<?php echo $value; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
		<br>
		<br>
	</div>
		
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>