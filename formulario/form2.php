<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
// Get the modal
var modal = document.getElementById('nameuser');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
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
		margin-top: 10px;
		width: 40%;
		padding-bottom: 20px;
		text-align: center;
		border: 1px black solid;
        min-width: min-content;
	}
	form .center input[type="text"],
	input[type="password"] {
		width: 40%;
	}
	input[type="submit"] {
		background-color: greenyellow;
	}
	label {
        text-align: left;
		display: block;
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
					<label for="name">Name user:</label><br />
					<input type="text" id="name" placeholder="Nombre" name="name" autofocus>
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
						<input type="radio" onclick="document.getElementById('nameuser').disabled=true" name="Login" id="Login" value="0">
						<label for="Login">Login</label>
						<input type="radio" name="Login" id="guardar" value="1">
						<label for="guardar">Guardar</label>
				</div>
				<div class="center">
                    <input type="submit">
				</div>
                <?php
                function encrypt($txt,$token1,$t){
                    $t=date('y.m.d');
                    $tokenizer=$token1-$txt.$t;
                    $hash= hash('gost',$tokenizer, false);
                    return $hash;
                }
                ?>
			</fieldset>
		    </form>
        </div>
	</body>
</html>