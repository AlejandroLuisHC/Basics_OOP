<?php
    require_once('interface_product.php');
    
    class Instrument implements Product {
        protected int $id;
        protected string $type;
        protected int $price;
        
        function __construct($type, $price){
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

        function __destruct() {
            print "Destroying " . __CLASS__;
        }
    };