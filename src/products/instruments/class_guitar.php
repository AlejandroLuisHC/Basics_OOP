<?php
    require_once('../src/products/class_instrument.php');

    class Guitar extends Instrument {

        protected string $subtype;
        protected string $maker;
        
        function __construct(string $type, int $price, int $noStrings, string $technique, string $subtype, string $maker){
            parent:: __construct($type, $price, $noStrings, $technique); 
            $this -> subtype = $subtype;
            $this -> maker   = $maker;
        }

        function playSampleSong() {
            return "Playing recording...";
        }

        function getData() {
            return "{$this -> maker} {$this -> subtype} {$this -> type}: {$this -> id}
                <br>Price: {$this-> price}€";
        }
        
    }; 