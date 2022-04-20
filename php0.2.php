<!DOCTYPE html>

<head>

</head>

<body>
    <?php
    $pila = array("a", "b");
    foreach (range('a', 'z') as $letra) {
        echo $letra;
        print_r($pila);
        array_push($pila, "manzana", "arandano");
    }
    print_r($pila);
    ?>
</body>

</html>