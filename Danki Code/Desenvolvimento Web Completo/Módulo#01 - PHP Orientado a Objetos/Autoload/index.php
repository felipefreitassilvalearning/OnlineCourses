<?php

    include('config.php');

    spl_autoload_register('myAutoLoad');

    new Utilidades;
    echo '<br>';
    new Home\Inicial();

?>