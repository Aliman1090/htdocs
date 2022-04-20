<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        echo 'ksajdkas';
    if(! empty($_GET['email'])){
        echo 'se ha guardado'
        $email = $_GET['email'];
        $save1=true;
        //echo $name.'<br />';
    }
    if(! empty($_GET['password'])){
        echo 'se ha guardado'
        $password = $_GET['password'];
        $save2=true;
        //echo $name.'<br />';
    }
    if(! empty($_GET['radio'])){
        echo 'se ha guardado'
        $radio = $_GET['radio'];
        $save3=true;
        //echo $name.'<br />';
    }
    if(! empty($_GET['radio'])){
        echo 'se ha guardado'
        $radio = $_GET['radio'];
        $save4=true;
        //echo $name.'<br />';
    }
    if($save1&$save2&$save3&$save4){
        echo 'hola';
        $usuarios = new SimpleXMLElement('db.xml', 0, true);
        $nuevoUsuario = $usuarios->addChild('user');
        $nuevoUsuario->addChild('email', $email);
        $nuevoUsuario->addChild('password', $password);
        $nuevoUsuario->addChild('radio', $radio);
        $nuevoUsuario->addChild('radio', $radio));
    }
    $token = 'mytoken';

    function encrypt($txt, $token1, $t)
    {
      $tokenizer = $token1 . $txt . $t;
      $hash = hash('gost', $tokenizer, false);
      return $hash;
    }
    encrypt($email, $token, $datexml)
    }
}
?>