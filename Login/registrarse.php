<?php

if(isset($_POST['registrarse'])){
    require_once('RegistroUser.php');

    $registrar = new registroUser();

    $registrar->setIdCamper($_POST['idCamper']);
    $registrar->setEmail($_POST['email']);
    $registrar->setUsername($_POST['username']);
    $registrar->setPassword($_POST['password']);

    if($registrar->checkUser($_POST['email'])){
        echo "<script>alert('Usuario ya existente');
            document.location='loginRegister.php';
            </script>";
    }else{

        $registrar->insertData();
        echo "<script>alert('Usuario Registrado satisfactoriamente');
            document.location='../Home/home.php';
            </script>";
    }

}

?>