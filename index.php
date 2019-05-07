<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" sizes="96x96" href="assets/img/logo.png">
		<title>Login</title>
		
		
		
		<link rel="stylesheet" href="assets/css/style.css">
		
	</head>
	<body style=" background: #272822;">
		<div  style="margin-top: absolute;">
			<div class="container">
<?php
				if(@$_GET['Empty']==true)
				{
				
				}
				?>
				<img src="assets/img/logo.png" alt="Logo" style="width: 150px ; height: 200px">
				<h1 style="color: gold">Welcome</h1>
				
				<form action="assets/php/process.php" class="form" method="POST">
					<input type="text" placeholder="Username" name="Uname">
					<input type="password" placeholder="Password" name="NIM">
					<button type="submit" name="Login">Log in</button>
				</form>
							    <footer style="color: gold;">Copyright &#169; ProjectQ   
				<?php echo date("Y"); ?></footer>
			</div>
			<ul class="bg-bubbles">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</body>
</html>