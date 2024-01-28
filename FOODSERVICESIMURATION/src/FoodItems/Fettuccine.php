<?php

class Fettucine extends FoodItem{
    public const CATEGORY = 'pasta';
    

    public function constructor(String $name, String $explanation, float $price){
        parent::__construct($name,$explanation,$price);
    }
    public function getExplanation():string{
        return $this->explanation;
    
    }

    public function getName():string{
        return $this->name;

    }

    public function getPrice():float{
        return $this->price;
    }





}