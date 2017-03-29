<?php
class Order {
    public $orderDate;
    public $processedDate;

    public function __construct() {
        $this->orderDate = date("Y-m-d D H:i:s");
    }

    public function __toString() {
        return "Order Date: " . $this->orderDate . PHP_EOL;
    }
}
?>
