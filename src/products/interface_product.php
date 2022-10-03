<?php
    interface Product {
        public function getData();
        public function setPrice($price);
        public function getPrice();
        public function addToCart();
    };