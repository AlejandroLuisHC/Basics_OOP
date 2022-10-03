<?php
    abstract class StringInstruments {
        
        public int $noStrings;
        public string $technique;
        public static string $family = 'Strings';

        function __construct($no, $technique) {
            $this -> noStrings = $no;
            $this -> technique = $technique;
        }

        abstract function familyDefinition();

        abstract function getFamilyData($noStrings = "No.", $technique = "technique");
    };