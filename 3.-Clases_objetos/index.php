<?php 

    //EL orden de los include si afecta y genera errores
    include './user.php';
    include './person.php';
    include './admin.php';

    $user = new User;
    $user->type = new Admin;
    echo $user->type->greet();
?>