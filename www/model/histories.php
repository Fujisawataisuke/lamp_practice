<?php 
require_once MODEL_PATH . 'functions.php';
require_once MODEL_PATH . 'db.php';

function get_user_history($db, $user_id){
    $sql = "
      SELECT
        purchase_id,
        created,
        total
      FROM
        histories
      WHERE
        user_id = :user_id
      ORDER BY
        created desc
    ";
    $array=array(':user_id'=>$user_id);
    return fetch_all_query($db, $sql, $array);
}
function get_all_user_history($db){
  $sql = "
    SELECT
      purchase_id,
      created,
      total
    FROM
      histories     
    ORDER BY
      created desc
  ";
 
  return fetch_all_query($db, $sql);
}
