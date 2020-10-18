<?php

    //Una interfaz es como un contrato, en ese contrato se especifican métodos que quiero que sean obligatorios implementar en una clase
    // Database, get, delete, store, edit, update
    interface Person 
    {
        public function getName();
    }

    class Admin implements Person
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function getName()
        {
            return $this->name;
        }
    }
    
    $admin = new Admin('Admin');
    echo $admin->getName();

?>