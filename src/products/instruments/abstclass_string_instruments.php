<?php
    abstract class StringInstruments {
        
        protected int $noStrings;
        protected string $technique;

        function __construct($n, $technique){
            $this -> noStrings = $n;
            $this -> technique = $technique;
        }

        static function definition() {
            echo "Musical instruments that produce sound from vibrating strings when a performer 
                plays or sounds the strings in some manner.";
        }

        static function getSringsData() {
            return "This instrument has {$this -> noStrings} strings. <br>
            Playing technique: {$this -> technique}";
        }
    };