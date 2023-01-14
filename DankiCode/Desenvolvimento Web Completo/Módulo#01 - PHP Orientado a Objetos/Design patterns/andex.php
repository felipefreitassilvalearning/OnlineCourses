<?php

    class Cachorro
    {
        public function __construct()
        {
            echo 'classe "Cachorro"';
        }
    }

    class Gato
    {
        public function __construct()
        {
            echo 'classe "Gato"';
        }
    }

    class Animal
    {
        public static function build($nomeClasse)
        {
            if(class_exists($nomeClasse))
            {
                return new $nomeClasse;
            } else {
                die('Oops, a classe "'.$nomeClasse.'" não existe!');
            }                
        }
    }

    Animal::build('Cachorro');
    echo '<br>';
    Animal::build('Gato');
    echo '<br>';
    Animal::build('Rato');

?>