<?php

    include './Base.php';
    include './Guest.php';
    include './User.php';
    include './Admin.php';

    $guest = new Guest();
    echo $guest->login();
    echo '<br>';

    $user = new User('Didier');
    echo $user->login();
    echo '<br>';

    $admin = new Admin('María');
    echo $admin->login();
    echo '<br>';
?>