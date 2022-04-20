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
            <form method="post" action="save.php"];>
                    <div class="asd">
                        <p style="background-color: <?php if (! $save1) {echo '#ff4d4d';}else{echo'#33cc33';}?>">Nombre: <?php echo $name;?></p>
                    </div>
                    <div class="asd">  
                        <p style="background-color: <?php if (! $save2) {echo '#ff4d4d';}else{echo'#33cc33';}?>">Email: <?php echo $email;?></p>
                    </div>
                    <div class="asd">
                        <p style="background-color: <?php if (! $save3) {echo '#ff4d4d';}else{echo'#33cc33';}?>">Password: <?php echo $password;?></p>
                    </div>
                    <br />
            </form>
        </div>
               
        <style>
            .asd{
                margin-left:20px;
            }
        </style>

        <?php
            $save=false;
            if($save1&$save2&$save3){
                $save=true;
            }
        ?>
        <div class="main center">
            <?php
            if($save){
                $usuarios = new SimpleXMLElement('db.xml', 0, true);
                $nuevoUsuario = $usuarios->addChild('user');
                $nuevoUsuario->addChild('name', $name);
                $nuevoUsuario->addChild('email', $email);
                $nuevoUsuario->addChild('password', $password);
                $nuevoUsuario->addChild('time', time());
                //var_dump($usuarios->user[2]);
                //var_dump($usuarios);
                $usuarios->saveXML('db.xml');
                //write xml
                unset($_POST['name']);
                unset($_POST['email']);
                unset($_POST['password']);
                //print_r($_POST);
                echo 'Guardado.';
                echo '<form method="POST" action="tabla.php"><br />
                    <input type="submit" value="Enviar" class="green bottom">
                    </form>';
                    }else{
                        echo 'Error, vuelve al inicio.';
                        echo '<form method="POST" action="index.php"><br />
                        <input type="submit" value="Inicio" class="red bottom">
                        <input type="hidden" name="name" value="'.$name.'">
                        <input type="hidden" name="email" value="'.$email.'">
                        <input type="hidden" name="password" value="'.$password.'">
                        </form>';
                    }
            ?>
        </div>
    </body>
</html>