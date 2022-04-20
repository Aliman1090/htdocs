<DOCTYPE html>

    <head></head>

    <body>
        <?php
        /*
echo '<h1>holaXXX</h1>';
$var = 1;
if(){}

if(){}
else{}

if(){}
else if(){}

if(){}
else if(){}
else if(){}
else{}

if($var == 5) {
    echo 'es 5';
} else if ($var ==9) {
    echo 'es 9';
} else {
    echo 'no es';
}
echo '<hr />'

      
        $hola = 7;
        $adios = 65;
        $sf = '5';

        if ($hola > $adios || $adios == 82) {
            echo ' si ' . $hola . ' ' . $adios . '=' . ($hola + $adios) . $sf;
        } elseif ($hola == 6) {
            echo 'no son iguales';
        } else {
            echo 'no se cumple ninguna de las anteriores';
        }

        var_dump($hola);

*/
        ?>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (!empty($_GET['quantity'])) {
                echo ' Edad ';
                $edad = $_GET['quantity'];
                echo $edad;
                Cosa($edad);
            } elseif (!empty($_GET['quantity2'])) {
            } else {
                echo 'hay un problema';
            }
        }
        function cosa($edad)
        {
            if ($edad > 0 && $edad < 200) {
                if ($edad > 18) {
                    echo ' si es mayor edad ';
                } elseif ($edad >= 16) {
                    echo ' menor de edad con algunos derechos ';
                } elseif ($edad <= 15) {
                    echo ' !Atencion! usted es menor de edad ';
                }
            } else {
                echo ' hay un problema ';
            }
        }
        assert(1 == 2);
        assert(cosa(17) == 'menor de edad');
        assert(cosa(18) == 'mayor de edad');
        assert(cosa(-18) == 'numero invalido');
        assert(cosa(-17) == 'numero invalido');
        /*
        $pila = array("naranja", "platano");
        print_r($pila);
        array_push($pila, "manzana", "arandano");
        print_r($pila);
        echo $pila
        */
        ?>
        <?php
        foreach (range('a', 'z') as $letra) {
            echo $letra;
        }
        $pila = array("naranja", "platano");
        print_r($pila);
        array_push($pila, "manzana", "arandano");
        print_r($pila);
        echo $pila;
        ?>
        <?php
        /*
        function cosa($edad)
        {
            $guardado = '';
            if ($edad > 17) {
                $guardado = 'mayor de edad';
            } elseif ($edad > 0) {
                $guardado = 'menor de edad';
            } else {
                $guardado = 'numero invalido';
            }
            return $guardado;
        }

        //assert(1 == 2);

        assert(cosa(17) == 'menor de edad');
        assert(cosa(18) == 'mayor de edad');
        assert(cosa(-18) == 'numero invalido');
        assert(cosa(-17) == 'numero invalido');
*/
        ?>
    </body>

    </html>