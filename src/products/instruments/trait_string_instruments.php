<?php
    trait StringInstruments {
        
        public int $noStrings;
        public string $technique;
        public static string $family = 'Strings';

        // function __construct($n, $technique){
        //     $this -> noStrings = $n;
        //     $this -> technique = $technique;
        // }

        static function familyDefinition() {
            return "family instruments are musical instruments that produce sound from vibrating strings when a performer 
                plays or sounds the strings in some manner.";
        }

        static function getFamilyData($noStrings = "No.", $technique = "technique") {
            return "This instrument has $noStrings strings. <br>
            Playing technique: $technique";
        }
    };