<?php

    include 'greet.php'; // Muestra un mensaje de advertencia por cualquier error
    # require 'greet.php'; // No manda advertencia pero si un error fatal y detiene el sistema
    # require_once 'greet.php'; //Si duplicas la línea entonces el sistema detecta que solo es una vez
    
    echo greet('Didier', 'Cómo estás?');
?>