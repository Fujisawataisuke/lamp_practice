//購入履歴テーブル
CREATE TABLE `histories` (
    `purchase_id` int(11) NOT NULL AUTO_INCREMENT,
    `user_id` int(11) NOT NULL,
    `total`  int(11) NOT NULL,
    `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
     PRIMARY KEY (`purchase_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 
  
  
CREATE TABLE `detail`(
    `detail_id` int(11) NOT NULL AUTO_INCREMENT,
    `purchase_id` int(11) NOT NULL,
    `item_id` int(11) NOT NULL,
    `amount` int(11) NOT NULL,
    `price`  int(11) NOT NULL,
    PRIMARY KEY (`detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


