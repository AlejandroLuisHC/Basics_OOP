<?php
    require_once('interface_product.php');
    require_once('instruments/abst_string_instruments.php');
    
    class Instrument extends StringInstruments implements Product {
        protected int $id;
        protected string $type;
        protected int $price;
        
        function __construct($type, $price, $no, $technique){
            parent:: __construct($no, $technique);
            $this -> type = $type;
            $this -> price = $price;
            $this -> id = rand(1, 99999);

        }

        function getData() {
            return "{$this -> type}: {$this -> id}
                <br>Price: {$this -> price}€";
        }

        function setPrice($price) {
            $this -> price = $price;
        }

        function getPrice() {
            return $this -> price;
        }

        function addToCart(){
            echo "Storing id: {$this -> id} to future use in the shopping wizard.";
        }

        function familyDefinition() {
            return "family instruments are musical instruments that produce sound from vibrating strings when a performer 
                plays or sounds the strings in some manner.";
        }

        function getFamilyData($noStrings = "No.", $technique = "technique") {
            return "This instrument has $noStrings strings. <br>
            Playing technique: $technique";
        }

        function __destruct() {
            print "Destroying " . __CLASS__;
        }
    };