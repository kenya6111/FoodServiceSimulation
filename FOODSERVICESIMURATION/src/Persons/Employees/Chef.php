<?php

require_once 'Employee.php';
class Chef extends Employee{

    public function constructor(String $employeeId, String $salary,string  $name , int $age, string $address){
        parent::__construct($employeeId,$salary,$name,$age,$address);
    }
    public function getEmployeeId():int{
        return $this->employeeId;
    
    }

    public function getSalary():float{
        return $this->salary;

    }

    public function getName(): String{
        return $this->name;

    }
    public function getAge(): int{
        return $this->age;

    }
    public function getAddress(): String{
        return $this->address;

    }





}