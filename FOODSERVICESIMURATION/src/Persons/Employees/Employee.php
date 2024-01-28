<?php
require_once __DIR__ . '/../Person.php';

abstract class Employee extends Person
{
   

    // public $name;
    // public $explanation;
    // public $price;


    // abstract protected function getExplanation();
    // abstract protected function getName();
    // abstract protected function getPrice();
    
    protected int $employeeId;
    protected float $salary;
    
    public function __construct(int $employeeId, float $salary,string  $name , int $age, string $address){
        $this->employeeId =$employeeId;
        $this->salary =$salary;

        parent::__construct($name, $age, $address);
    }

    abstract protected function getEmployeeId():int;
    abstract protected function getSalary():float;


    


    

    



}