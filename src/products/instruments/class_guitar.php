<?php
    require_once('../src/products/class_instrument.php');
    require_once('trait_string_instruments.php');

    class Guitar extends Instrument {

        use StringInstruments;

        protected string $subtype;
        protected string $maker;
        
        function __construct(string $type, int $price, string $subtype, string $maker, int $noStrings, string $technique){
            parent:: __construct($type, $price); 
            $this -> subtype = $subtype;
            $this -> maker   = $maker;
            $this -> noStrings   = $noStrings;
            $this -> technique   = $technique;
        }

        function playSampleSong() {
            return "Playing recording...";
        }

        function getData() {
            return "{$this -> maker} {$this -> subtype} {$this -> type}: {$this -> id}
                <br>Price: {$this-> price}€";
        }
        
    }; 