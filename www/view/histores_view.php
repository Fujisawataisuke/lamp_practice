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

    <?php if(!empty($histories)){ ?>
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th>注文番号</th>
            <th>購入日</th>
            <th>合計金額</th>
            <th>購入詳細</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($histories as $history){ ?>
          <tr>
            <td><?php print(h($history['purchase_id']));?></td>
            <td><?php print(h($history['created'])); ?></td>
            <td><?php print(h(number_format($history['total']))); ?>円</td>
            <td>
            <form method="post" action="detail.php">
              <input type="submit" value="購入詳細表示">
              <input type="hidden" name="purchase_id" value="<?php print h($history['purchase_id']); ?>">
              <input type="hidden" name="token" value="<?php print h($token);?>">
              <input type="hidden" name="created" value="<?php print h($history['created']);?>">
              <input type="hidden" name="total" value="<?php print h($history['total']);?>">
            </form>
          </td>
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