<?php
require_once __DIR__ . '/../Person.php';
class Customer extends Person{

    protected array $favoriteCategories;

    public function __construct(String $name, int $age, string $address,array $interestedMap){
        $this -> favoriteCategories = $interestedMap;
        parent::__construct($name,$age,$address);
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

    public function interestedCategories(Restaurant $restaurant): array{
        return $restaurant -> getMenuCategories();
    }
    public function order(Restaurant $restaurant): Invoice {
        // 実際のロジックに従って、注文を行い、請求書を生成して返します。
        return $restaurant->order($this -> favoriteCategories);
    }

    




}