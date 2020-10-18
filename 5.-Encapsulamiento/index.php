<?php

// public -> Pueden ser accedidos a lo largo de todo el sistema
// protected -> Solo pueden acceder a los elementos de la clase aquellas clases que hereden de mi
// private -> Nadie puede hacer uso de este sistema ni siquiera los hijos que hereden de mi.

// Podemos crear propiedades, metodos y constantes.
//Cuando escribimos el encapsulamiento garantizamos la integridad de los datos. 

class User 
{
    // las constantes deben escribirse en Mayúsculas
    public const PAGINATE = 25;

    //método
    public $username;

    //función
    public function getUserName()
    {
        //
    }
}