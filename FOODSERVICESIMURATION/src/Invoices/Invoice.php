<?php
class Invoice {
    private float $finalPrice;

    private DateTime $orderTime;

    private int $estimatedTimeInMinutes;

    public function __construct(float $finalPrice, DateTime $orderTime, int $estimatedTimeInMinutes) {
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderTime;
        $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
    }

    // 最終価格を返すゲッター
    public function getFinalPrice(): float {
        return $this->finalPrice;
    }

    // 注文時間を返すゲッター
    public function getOrderTime(): DateTime {
        return $this->orderTime;
    }

    // 推定時間を返すゲッター
    public function getEstimatedTimeInMinutes(): int {
        return $this->estimatedTimeInMinutes;
    }

    // Invoiceの詳細を表示するためのメソッド
    public function printInvoiceDetails() {
        echo "Final Price: " . $this->getFinalPrice() . "\n";
        echo "Order Time: " . $this->getOrderTime()->format('Y-m-d H:i:s') . "\n";
        echo "Estimated Time for Completion: " . $this->getEstimatedTimeInMinutes() . " minutes\n";
    }



}