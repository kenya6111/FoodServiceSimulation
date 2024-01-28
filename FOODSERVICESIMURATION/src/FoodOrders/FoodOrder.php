<?php
class FoodOrder{
    //foodItemオブジェクトの配列
    private array $items;

    //注文時間
    private DateTime $orderTime;

    public function __construct(array $items){
        $this -> items = $items;
        $this -> orderTime = new DateTime();
        }

    public function getItems(): array{
        return $this->items;

    }

    public function getOrderTime() : DateTime {
        return $this->orderTime;
        
    }
}

