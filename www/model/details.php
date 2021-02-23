<?php
function get_detail($db, $purchase_id){
    $sql = "
      SELECT
        detail.price,
        detail.amount,
        items.name
      FROM
        detail
      JOIN
        items
      ON
        detail.item_id = items.item_id
      WHERE
        detail.purchase_id = :purchase_id
    ";
    $array=array(':purchase_id'=>$purchase_id);
    return fetch_all_query($db, $sql, $array);
}