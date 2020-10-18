<?php
//Una clase tambien puede ser final, es decir no se puede usar para heredar. 
//Su diferencia con la abstraccion es que una clase final si puede instanciarse 
//si se usa final su metodo de esta clase no debe serlo y tampoco puede usarse extends y al instanciarse debe ser directo $user = new User;
    class User 
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function getName() // Se le coloca final public function si no se quiere sobreescribir la función.
        {
            return "Soy $this->name";
        }

    }

    class Admin extends User
    {   
        public function getName() 
        {
            return "Hola soy $this->name";
        }
    }

    $admin = new Admin('Didier'); //Admin extiende o hereda del usuario sus atributos o comportamientos
    echo $admin->getName(); // toma en cuenta esa función del usuario o clase padre

    echo '<br>';

    $user = new User('Mario');
    echo $user->getName();

?>