<html>
	<body>

	<!-- Tipos de variables	Descripción-->

String	<!--Un string es una secuencia de caracteres, que puede tratarse de una palabra, de una frase,
			 de un texto o de la totalidad del código HTML de una página web.-->
Integer	<!--Un integer es un número entero y sin decimales que puede ser positivo o negativo.-->
Float	<!--Un float es un número de punto flotante, es decir, un valor numérico con decimales. En los lenguajes de programación,
			 la coma se escribe con un punto (.). PHP permite colocar hasta 14 caracteres detrás de la coma.-->
Boolean	<!--Las variables booleanas son el resultado de una operación lógica y solo comprenden dos constantes:
			 TRUE (verdadero) y FALSE (falso). Este tipo de variables se aplica cuando se trabaja con condiciones.-->
Array	<!--Un array es una variable que puede albergar varios elementos. Se trata de una agrupación
			 de diversos datos estructurados formando una matriz.-->
Object	<!--La variable object permite a los programadores definir tipos de datos propios y se aplica en la programación
			 orientada a objetos. Las variables del tipo object no se incluyen en nuestro tutorial de PHP.-->
NULL	<!--NULL representa una variable sin valor. Para las variables del tipo NULL, este es el único valor.-->

Preincremento	<!--++$numero	El operador ++ incrementa el valor de la variable $numero, de forma que el valor aumenta en 1.
					 El resultado será devuelto como el nuevo valor para $numero.-->
Predecremento	<!----$numero	El operador -- disminuye el valor de la variable $numero, de forma que el valor disminuye en 1.
					 El resultado se convertirá en el nuevo valor para $numero.-->
Postincremento	<!--$numero++	Se devuelve el valor actual de $numero y se incrementa el valor en 1.-->

<body>
		<?php
		
			$manolo = array('hosni','erik', 'marc', 'raquel');
			var_dump($manolo);
			echo '<br />';
			echo '<br />';
			print_r($manolo);
			echo '<br />';
			echo '<br />';
			echo count($manolo);
			echo '<br />';
			echo '<br />';
			var_dump(4.52);
			echo '<br />';
			echo '<br />';
			var_dump(count($manolo));
			echo '<br />';
			echo '<br />';
			
			for($i=0;$i<count($manolo);$i++){
				echo $manolo[$i].'<br />';
			}
		?>
		
		<?php
		
			$alumnos = array('hosni','erik', 'marc', 'raquel');
			array_push($alumnos,'mon','desire');
			print_r($alumnos);
			echo '<br />';
			echo '<br />';
			unset($alumnos[3]);
			print_r($alumnos);
			echo '<br />';
			echo '<br />';
			echo $alumnos[2];
		
		?>
		<?php
		
			$a = array('a' => 'one','b' => 'two','c' => 'three');
			var_dump($a);
			echo '<br />';
			echo '<br />';
			print_r($a);
			echo '<br />';
			echo '<br />';
			echo $a['b'];
			//echo $a[1];
			echo '<br />';
			echo '<br />';
			foreach($a as $value){
				echo '<p><b>'.$value.'</b></p><br />';
			}
			
		?>
		<?php
		
			if(!$xml = simplexml_load_file('db2.xml')){
				echo "No se ha podido cargar el archivo";
			} else {
				foreach ($xml as $user){
					echo 'Nombre: '.$user->name.'<br>';
					echo 'Email: '.$user->email.'<br>';
					echo 'Email2: '.$user['email'].'<br>';
				}
			}
			
		?>
		<?php
		
			$usuarios = new SimpleXMLElement('db2.xml', 0, true);
			$nuevoUsuario = $usuarios->addChild('user');
			$nuevoUsuario->addChild('name', 'Bernard');
			$nuevoUsuario->addChild('email', 'Madoff');
			$nuevoUsuario->addChild('password', 'Madoff');
			$nuevoUsuario->addChild('time', time());
			//var_dump($usuarios->user[2]);
			//var_dump($usuarios);
			//$usuarios->saveXML('db2.xml');
		
		?>
	</body>
</html>