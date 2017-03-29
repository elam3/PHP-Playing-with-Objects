<?php
class Product {
    var $pID;
    public $pCode;
    public $pName;
    public $pPrice;
    public static $count = 0;

    public function __construct($ID, $Code, $Name, $Price, $Qty) {
        self::$count += $Qty;
        $this->pID = $ID;
        $this->pCode = $Code;
        $this->pName = $Name;
        $this->pPrice = $Price;
    }

    public function __toString() {
        return "Product ID: " . $this->pID . "\n"
            . "Product Code: " . $this->pCode . "\n"
            . "Product Name: " . $this->pName . "\n"
            . "Product Price: " . $this->pPrice . "\n";
    }
}
?>
