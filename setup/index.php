<?php
require("../pdo_connect.php");
$create = $conn->prepare("CREATE TABLE IF NOT EXISTS `bans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `reason` mediumtext NOT NULL,
  `lift_date` date NOT NULL,
  `ban_date` date NOT NULL,
  `administrator` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;
CREATE TABLE IF NOT EXISTS `project_sa` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `script_title` varchar(1000) DEFAULT NULL,
  `script_description` mediumtext,
  `script_price` int(100) DEFAULT NULL,
  `script_postedby` varchar(100) DEFAULT NULL,
  `job_postedby` varchar(100) DEFAULT NULL,
  `job_price` int(6) DEFAULT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `job_description` mediumtext,
  `job_applicants` mediumtext,
  `accepted` int(6) DEFAULT NULL,
  `img_url` mediumtext,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `script_id` mediumtext NOT NULL,
  `script_titlex` mediumtext NOT NULL,
  `script_summary` mediumtext NOT NULL,
  `script_del` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;
CREATE TABLE IF NOT EXISTS `transactions` (
  `TID` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `payer_email` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `amount` float NOT NULL,
  `currency` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `txn_id` varchar(100) NOT NULL,
  `txn_type` varchar(100) NOT NULL,
  `payer_id` varchar(50) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL,
  `payment_date` datetime NOT NULL,
  `success` varchar(255) NOT NULL,
  `payer_user` varchar(255) NOT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
CREATE TABLE IF NOT EXISTS `us` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `rank` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `banned` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;");

$create->execute();

header('Location: adduser.php');