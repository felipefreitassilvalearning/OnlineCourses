<?php

    class minhaClasse
    {
        const valor = 400;
        public function __construct()
        {
            echo self::valor;
        }
    }

    new minhaClasse;
    echo '<br>'.minhaClasse::valor;
    
?>