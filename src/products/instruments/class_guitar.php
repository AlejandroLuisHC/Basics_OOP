<?php
    require_once('../src/products/class_instrument.php');
    require_once('abstclass_string_instruments.php');

    class Guitar extends Instrument {
        protected int $id;
        protected string $type;
        protected string $subtype;
        protected string $maker;
        protected int $price; 
        static $family = 'Strings';
        
        function __construct(string $type, int $price, string $subtype, string $maker){
            parent:: __construct($type, $price); 
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