<?php
require_once '../conf/const.php';
require_once MODEL_PATH . 'functions.php';
require_once MODEL_PATH . 'user.php';
require_once MODEL_PATH . 'item.php';
require_once MODEL_PATH . 'cart.php';
require_once MODEL_PATH . 'histories.php';
require_once MODEL_PATH . 'details.php';
session_start();

if(is_logined() === false){
  redirect_to(LOGIN_URL);
}
$token=get_post('token');
if(is_valid_csrf_token($token)===false){
  redirect_to(LOGIN_URL);
}
//$_SESSION['csrf_token']を削除する。
unset($_SESSION['csrf_token']);

$db = get_db_connect();

$user = get_login_user($db);

$purchase_id=get_post('purchase_id');
$created=get_post('created');
$total=get_post('total');
$details = get_detail($db, $purchase_id);

include_once VIEW_PATH . 'detail_view.php';