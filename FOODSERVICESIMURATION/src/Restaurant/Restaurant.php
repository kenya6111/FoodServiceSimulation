<?php
require_once __DIR__ . '/../Invoices/Invoice.php';

class Restaurant {
    private array $menu;
    private array $employees;

    public function __construct(array $menu, array $employees) {
        $this->menu = $menu;
        $this->employees = $employees;
    }

    public function getMenu(): array {
        return $this->menu;
    }

    public function getEmployees(): array {
        return $this->employees;
    }

    public function getMenuCategories(): array {
        $categories = [];
        foreach ($this->menu as $menuItem) {
            $category = $menuItem::CATEGORY; // カテゴリを取得
            if (!in_array($category, $categories)) {
                $categories[] = $category; // まだリストにないカテゴリだけを追加
            }
        }
        return $categories;
    }

    // 特定のカテゴリのアイテムを注文する
    public function order(array $categories): Invoice {
        // ここでは、注文されたカテゴリに基づいてアイテムを検索し、
        // 新しい FoodOrder オブジェクトを生成します。
        // 実際のビジネスロジックに基づいて、適切なアイテムを選択し、
        // オーダーを準備する必要があります。
        $categories = array_keys($categories); 
        $orderedItems = [];
        foreach ($this->menu as $item) {
            print_r($item);
            print_r($item::getCategory());
            print_r($categories);
            print_r(in_array($item::getCategory(), $categories));
            
            
            

            if (in_array($item::getCategory(), $categories)) {
                $orderedItems[] = $item;
            }
        }

        // ここでは、シンプルなシミュレーションのために、
        // 単純に全アイテムの価格を合計しています。
        $totalPrice = array_sum(array_map(function ($item) {
            return $item->getPrice();
        }, $orderedItems));

        // 注文時間と推定時間を設定します。
        // この例では、推定時間は単純にアイテム数に基づいています。
        $orderTime = new DateTime();
        $estimatedTime = count($orderedItems) * 5; // 仮に1アイテムあたり5分とします。

        // FoodOrderオブジェクトを生成
        $foodOrder = new FoodOrder($orderedItems);

        // インボイスを生成して返す
        return new Invoice($totalPrice, $orderTime, $estimatedTime);
    }
}