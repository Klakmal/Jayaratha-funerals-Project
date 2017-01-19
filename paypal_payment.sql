CREATE TABLE `paypal_payment` (
 `payment_id` int(11) NOT NULL AUTO_INCREMENT,
 `resid` int(11),
 `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `txn_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `total_amount` float(10,2) NOT NULL,
 `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
 `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 