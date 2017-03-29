<?php
class PurchaseOrder extends Order {
    public $supplierName;

    public function __construct($supplierName) {
        parent::__construct();
        $this->supplierName = $supplierName;
    }

    public function __toString() {
        return parent::__toString()
            . "Supplier Name: " . $this->supplierName . PHP_EOL;
    }
}
?>
