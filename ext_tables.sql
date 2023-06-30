#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE `tx_tickermessages_domain_model_message`
(
    `title` tinytext,
    `bodytext` mediumtext
    `categories` int(11) DEFAULT '0' NOT NULL,
);