<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Mon">
		<meta name="description" content="Free Web tutorials">
        <link rel="stylesheet" href="index.css">
		<title></title>
	</head>
	<body>
        <?php
		$name='';
		$email='';
		$password='';
		$save1=false;
		$save2=false;
		$save3=false;
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if(! empty($_POST['name'])){
					$name = $_POST['name'];
					$save1=true;
					//echo $name.'<br />';
				}
				if(! empty($_POST['email'])){
					$email = $_POST['email'];
					$save2=true;
					//echo $name.'<br />';
				}
				if(! empty($_POST['password'])){
					$password = $_POST['password'];
					$save3=true;
					//echo $name.'<br />';
				}
			}
		?>

        <div class="main">
			<form method="post" action="save.php"];?>
				<div class="center">
					<label for="name">Name:</label>
					<input type="text" name="name" placeholder="Your name." class="input_text" value="<?php echo $name;?>">
				</div>
				<div class="center">
					<label for="email">Email:</label>
					<input type="text" name="email" placeholder="example@dominio.com" class="input_text" value="<?php echo $email;?>">
				</div>
				<div class="center">
					<label for="password">Password:</label>
					<input type="password" name="password" placeholder="Your password." class="input_text" value="<?php echo $password;?>">
				</div>
				<div class="center">
					<input class="bottom" type="submit">
				</div>
			</form>
		</div>
    </body>
</html>