<?php
  // クリックジャッキング対策
  header('X-FRAME-OPTIONS: DENY');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <?php include VIEW_PATH . 'templates/head.php'; ?>
  <title>購入明細</title>
 
</head>
<body>
  <?php include VIEW_PATH . 'templates/header_logined.php'; ?>
  <h1>購入明細</h1>

  <div class="container">
    <?php include VIEW_PATH . 'templates/messages.php'; ?>

    
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
      </tbody>
    </table>

    <!-- 購入明細 -->
    <table>
      <thead>
        <tr>
          <th>商品名</th>
          <th>価格</th>
          <th>購入数</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($details as $detail){ ?>
        <tr>
          <td><?php print($detail['name']); ?></td>
          <td><?php print($detail['price']); ?></td>
          <td><?php print($detail['amount']); ?></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
</body>
</html>