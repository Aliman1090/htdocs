<DOCTYPE html>
<html>
	<head>
		<style>
			table,th ,td{
				border:1px solid black;
				text-align:left;
			}
			table{
				border-collapse:collapse;
				width:100%;
			}
			th, td{
				padding:15px;
				margin:0px;
			}
			.azul {
				background-color:bluedodger;
			}
			.verde {
				background-color:green;
			}
		</style>
	</head>
	<body>	
		<table>
			<caption>tabla</caption>
			<?php
			$tr='<tr>';
				for($colum=10;$colum>=0;$colum--) {
					echo $tr;
					for($fila=10;$fila>=0;$fila--) {
						echo '<td ';
							if($colum%2==0&$fila%2==0){
								echo 'class="verde"';
							}else if($colum%3==0&$fila%3==0){
								echo 'class="azul"';
							}
							echo '>'.$colum.' - '.$fila.'</td>';
					}
					echo '</tr>';
				}
			?>
		</table>
	</body>
</html>