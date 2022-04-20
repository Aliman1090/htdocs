<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	body {
		background-color: #d8d8d8;
	}
	.main {
		background-color: white;
		margin: 3%;
		margin-top: 60px;
		border-radius: 5px;
		padding: 15px;
	}
	.center {
		margin: auto;
		margin-top: 20px;
		width: 30%;
		padding: auto;
		padding-top: 5px;
		padding-bottom: 5px;
		text-align: center;
		border: 1px black solid;
	}
	form .center input[type="text"],
	input[type="password"] {
		width: 70%;
	}
	form select {
		width: 40%;
	}
	form input[type="radio"] {
		float: left;
	}
	input[type="reset"] {
		background-color: blueviolet;
	}
	input[type="submit"] {
		background-color: greenyellow;
	}
	label {
		text-align: left;
		display: block;
	}
	.input_text {
		width: 90%;
	}
</style>
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
			<form method="post" action=".\save.php">
			<fieldset>
			<div class="center">
					<label for="name">Email:</label><br />
					<input type="text" id="name" placeholder="nombre" name="name" autofocus>
				</div>
				<div class="center">
					<label for="fmail">Email:</label><br />
					<input type="text" id="mail" placeholder="email@example.com" name="email">
				</div>
				<div class="center">
					<label for="fpassword">Password:</label><br />
					<input type="password" id="password" placeholder="Password" name="password">
				</div>
                <div class="center">
					<label for="gender">Gender:</label>
					<select name="gender" required>
						<option value="0">Mujer</option>
						<option value="1" disabled selected value >Hombre</option>
						<option value="2">xx</option>
						<option value="" ></option>
					</select>
				</div>
				<div class="center">
					<label for="date">Date:</label>
					<input type="date" name="date" min="2000-01-01" max="2030-12-31">
				</div>
				<div class="center">
					<label for="language">Qué viaje te gustó más?</label>
					<div>
						<input type="radio" name="language" id="html" value="0">
						<label for="html">Egipto</label>
					</div>
					<div>
						<input type="radio" name="language" id="css" value="1">
						<label for="css">Brasil</label>
					</div>
					<div>
						<input type="radio" name="language" id="php" value="2">
						<label for="php">Tailandia</label>
					</div>
					<div>
						<input type="radio" name="language" id="js" value="3">
						<label for="js">Paris</label>
					</div>
				</div>
				<div class="center">
				<label for="tems"><input type="checkbox" id="tems" name="tems" value="terms" checked>Aceptar</label>
				</div>
				<div class="center">
				<label for="cond"><input type="checkbox" id="cond" name="cond" value="cond">Rechazar</label>
				</div>
				<div class="center">
					<input type="reset">
					<input type="submit">
				</div>
			</fieldset>
		</form>
	</body>
</html>