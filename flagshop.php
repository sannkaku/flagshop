<?php require_once('data.php') ?>

//(!)PHP部分を埋めてみよう

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"

  <title>Flagshop.com</title>
  <link rel="stylesheet" type="text/css" href="flagshop.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Flagshop</h1>
    <form method="post" action="confirm.php">
      <div class="menu-items">
        <?php foreach($items as $item): ?>
          <div class="menu-item">
            <img src="<?php $item->getImage(); ?>" class="menu-item-image">
            <h3 class="menu-item-name"><?php echo $item->getName() ?></h3>
            <p class="price">¥<?php echo $item->getTotalPrice(); ?></p>
            <span>Amount:</span>
            <input type="text" value="0" name="<?php $item->getName(); ?>">
          </div>
        <?php  endforeach ?>
      </div>
      <input type="submit" value="注文する">
    </form>
  </div>
</body>
</html>
