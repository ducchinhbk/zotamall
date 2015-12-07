ALTER TABLE `wp_users` ADD (
   `last_name` varchar(100) NOT NULL default '',
   `first_name` varchar(100) NOT NULL default '',
   `in_access_token` VARCHAR(200) NOT NULL default '',
   `in_token_expire` VARCHAR(100) NOT NULL default ''
)

CREATE TABLE IF NOT EXISTS `wp_user_cookie` (
  `user_cookie_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_token` varchar(100),
  `user_ip` varchar(100),
  `user_mac` varchar(100),
  `user_agent` varchar(100),
  `ID` int(11) NOT NULL,
  PRIMARY KEY (`user_cookie_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `wp_user_notification` (
  `user_notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `notification_key` varchar(100) NOT NULL,
  `notification_value` varchar(256) NOT NULL,
  PRIMARY KEY (`user_notification_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `wp_user_collection` (
  `user_collection_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `collection_title` varchar(100) NOT NULL,
  `collection_description` varchar(256) NOT NULL,
  `shared` tinyint(1) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`user_collection_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `wp_user_collection_data` (
  `user_collection_data_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_collection_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `post_title` varchar(256) NOT NULL,
  `post_thumb_img` varchar(100) NOT NULL,
  `post_date` date NOT NULL,
  `post_vote` int(100),
  `post_author_id` int(11) NOT NULL,
  `post_author_name` varchar(200) NOT NULL,
  `post_author_email` varchar(200) NOT NULL,
  `post_author_avatar` varchar(200) NOT NULL,
  PRIMARY KEY (`user_collection_data_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


ALTER TABLE wp_users ADD cus_sum_voted INT NOT NULL DEFAULT(0);

create table `wp_author_votes` (
	`ID` bigint (20),
	`author_id` bigint (20),
	`user_id` bigint (20),
	`post_id` bigint (20),
	`date_voted` datetime 
);

CREATE TABLE `wp_ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_ip` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `rate` float NOT NULL,
  `date_added` datetime NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `wp_ratings` */

insert  into `wp_ratings`(`id`,`blog_id`,`post_id`,`user_id`,`user_ip`,`rate`,`date_added`) values (19,0,166,1,'::1',4.5,'2015-10-25 11:47:00'),(20,0,166,1,'::1',4.5,'2015-10-25 11:48:00'),(21,0,166,1,'::1',4,'2015-10-26 21:29:00'),(22,0,181,1,'::1',3.5,'2015-10-26 21:37:00'),(23,0,181,1,'::1',3.5,'2015-10-26 21:39:00'),(24,0,166,1,'::1',4.5,'2015-10-31 11:41:00');

CREATE TABLE IF NOT EXISTS `wp_user_bookmark` (
  `user_bookmark_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `post_id` INT(11) NOT NULL,
  `post_title` varchar(256) NOT NULL,
  `post_thumb_img` varchar(100) NOT NULL,
  `post_date` date NOT NULL,
  `post_vote` int(100),
  `post_author_id` int(11) NOT NULL,
  `post_author_name` varchar(200) NOT NULL,
  `post_author_email` varchar(200) NOT NULL,
  `post_author_avatar` varchar(200) NOT NULL,
  `post_author_city` varchar(200),
  PRIMARY KEY (`user_bookmark_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
