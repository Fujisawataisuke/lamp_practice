<?php
  // クリックジャッキング対策
  header('X-FRAME-OPTIONS: DENY');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <?php include VIEW_PATH . 'templates/head.php'; ?>
  <title>購入履歴</title>
 
</head>
<body>
  <?php include VIEW_PATH . 'templates/header_logined.php'; ?>
  <h1>購入履歴</h1>

  <div class="container">
    <?php include VIEW_PATH . 'templates/messages.php'; ?>

    <?php if(!empty($histores)){ ?>
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th>商品番号</th>
            <th>購入時間</th>
            <th>合計金額</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($histores as $history){ ?>
          <tr>
            <td><img src=<?php print(h($history['purchase_id']));?>></td>
            <td><?php print(h($history['created'])); ?></td>
            <td><?php print(h($history['total'])); ?>円</td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    <?php } else { ?>
      <p>購入履歴がありません</p>
    <?php } ?> 
  </div>
</body>
</html>