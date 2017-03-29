<div class='row' id='demo'>
<?php
    $product1 = new Product("95590991", "91502400297", "たばた絞り きさらぎ 短丈／ぼうし絞り水玉 黒柿色×栗金茶（くろがきいろ×くりかねちゃ）（サイズ：097-女性Fサイズ）", 13824, 3);
    $order1 = new Order();
    $purchaseOrder1 = new PurchaseOrder("SOU SOU");
?>
<pre>
<?php
    echo $product1 . PHP_EOL;
    echo "Quantity: " . $product1::$count . "\n\n";
    echo $order1 . PHP_EOL;
    echo $purchaseOrder1 . PHP_EOL;
?>
</pre>
</div>
