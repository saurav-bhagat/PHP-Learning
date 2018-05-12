<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP and AJAX</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">
	<script type="text/javascript">
		function showSuggestions(str){
			if(str.length==0){
				document.getElementById('output').innerHTML = '';
			} else {
				//ajax request
				var xhttp = new XMLHttpRequest();
  				xhttp.onreadystatechange = function() {
    			if (this.readyState == 4 && this.status == 200) {
      					document.getElementById('output').innerHTML = this.responseText;
    				}
  				};
  				xhttp.open("GET", "suggest.php?q="+str, true);
  				xhttp.send();
			}
		}
	</script>
</head>
<body>
	<div class="container">
		<h2>Search Users</h2>
		<form>
			<div class="form-group">
				Search User: <input type="text" class="form-control" onkeyup="showSuggestions(this.value)">
			</div>
		</form>

		<br>
		<p>
			suggestions: <span id="output" style="font-weight: bold"></span>
		</p>
	</div>
</body>
</html>