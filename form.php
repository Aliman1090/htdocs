<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Mohamad Mansour">
		<title></title>
		<style>
			body{
				background-color:#848484;
			}
			.main{
				background-color: #f2f2f2;
				margin: 5%;
				padding:5px;
				border-radius: 5px;
			}
			.center{
				margin: auto;
				width:30%;
				padding:10px;
				text-align:center;
			}
			label{
				text-align:left;
				display:block;
			}
			.input_text{
				width:99%;
			}
		</style>
	</head>
	<body>
		<div class="main">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<div class="center" style="background-color:red;">
					<label for="fname">Name:</label>
					<input type="text" name="fname" placeholder="Your name.." class="input_text">
				</div>
				<div class="center">
					<label for="email">Email:</label>
					<input type="text" name="email" class="input_text">
				</div>
				<div class="center">
					<label for="password">Password:</label>
					<input type="password" name="password" class="input_text">
				</div>
				<div class="center">
					<input type="submit">
				</div>
			</form>
		</div>
		<style>
			.asd{
				margin-left:20px;
			}
		</style>
		<?php
		$name='';
		$email='';
		$password='';
		$save1=true;
		$save2=true;
		$save3=true;
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if(! empty($_POST['fname'])){
					$name = $_POST['fname'];
					$save1=false;
					//echo $name.'<br />';
				}
				if(! empty($_POST['email'])){
					$email = $_POST['email'];
					$save2=false;
					//echo $name.'<br />';
				}
				if(! empty($_POST['password'])){
					$password = $_POST['password'];
					$save3=false;
					//echo $name.'<br />';
				}
				var_dump($save1);
				var_dump($save2);
				var_dump($save3);
			}
		?>
		<div class="main">
			<div class="asd">
				<p>Nombre:<?php echo $name;?></p>
			</div>
			<div class="asd">	
				<p>Email:<?php echo $email;?></p>
			</div>
			<div class="asd">
				<p>Password:<?php echo $password;?></p>
			</div>
			<br />
			<?php print_r($_POST); ?>

		</div>
		<div class="main">
			<tabel>
				<thead>
					<tr>
						<td>Nombre</td>
						<td>Email</td>
						<td>Nombre</td>
						<td>Nombre</td>
					</tr>
				</thead>
			</table>
			
		<div class="main">
			<table>
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Email</th>
						<th>Password</th>
						<th>Time</th>
					</tr>
				</thead>
			<tbody>
				<tr><td>Juan1</td><td>juan1@mail.com</td><td>123</td><td>1647424840</td></tr><tr><td>Juan2</td><td>juan2@mail.com</td><td>1234</td><td>1647424850</td></tr><tr><td>Juan3</td><td>juan3@mail.com</td><td>1235</td><td>1647424860</td></tr>
			</tbody>
			</table>
		</div>

		<?php
		/*
			function cosa($x,$y){
			echo $x+$y;
			echo 'juan';
			}

		  echo cosa(3,1);
		  echo '<br />';
		  echo cosa(5,1);

		  function sum($x,$y){
			  restar $x,$y;
		  }
		  function reset($x,$y){
			  restar $x,$y;
		  }

		  echo sum(3,8);
		  echo '<br />';
		  echo sum(2,8);
		  echo '<br />';
		  echo restar(8,2);
		  */
		  $token='0123';
		  $date='22-03-28';

		  function encrypt($txt,$token1,$t){
			  $t=date('y.m.d');
			  $tokenizer=$token1-$txt.$t;
			  $hash= hash('gost',$tokenizer, false);
			  return $hash;
		  }
		  echo encrypt('enrique"gmail.com',$token,date('y.m.d')).'enrique"gmail.com';
		  echo '<br />';
		  $res= encrypt('enrique"gmail.com',$token,$date).'enrique"gmail.com';

		  echo '<br />';
		  echo encrypt('hola',$toke,date('y.m.d')).'hola';
		?>

<form>
<input type="email" placeholder="email"><br />
<input type="password" placeholder="password"><br />
<input type="submit" placeholder="submit"><br />
</form>
		</div>

	</body>
</html>