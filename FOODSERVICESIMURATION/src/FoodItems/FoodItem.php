<?php
abstract class FoodItem
{
   

    // public $name;
    // public $explanation;
    // public $price;


    // abstract protected function getExplanation();
    // abstract protected function getName();
    // abstract protected function getPrice();
    
    protected String $name;
    protected String $explanation;
    protected float $price;
    protected const CATEGORY ='';
    
    public function __construct(String $name, String $explanation, float $price ){
        $this->name =$name;
        $this->explanation =$explanation;
        $this->price =$price;
    }

    abstract protected function getExplanation():String;
    abstract protected function getName():String;
    abstract protected function getPrice():float;

    public static function getCategory():String{
        return static::CATEGORY;
    }


    


    

    



}