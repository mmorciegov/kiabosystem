CREATE TABLE `shoppingcart_carts` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `uid` varchar(255) default NULL,
  `product_id` int(11) unsigned default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
