<?php require_once('data.php') ?>

//(!)PHPを埋めていこう



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>(Payment)Flagshop.com</title>
  <link rel="stylesheet" type="text/css" href="flagshop.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>Your Order List</h2>

    <?php $totalPayment= 0; ?>

    <?php foreach($items as $item): ?>
      <?php
        $orderCount= $_POST[$item->getName()];
        $menu->setOrderCount($orderCount);
        $totalPayment += $item->getTotalPrice();
      ?>
      <p class="order-amount">
        <?php  echo $item->getName; ?> //商品名
        x
        <?php echo $orderCount; ?> //個数
      </p>
      <p class="order-price"><?php echo getTotalPrice(); ?> Yen</p> //合計金額（円）
    <?php endforeach ?>

    <h3>Total Price: <?php >円</h3>

    <h2>Do you confirm your order?</h2>
    <form>
     <input type="button" value="cancel"> //戻るボタン
     <input type="button" method= "post" value="YES"> //支払い完了ボタン
    </form>
  </div>
</body>
</html>
