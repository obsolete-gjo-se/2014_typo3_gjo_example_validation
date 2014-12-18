CREATE TABLE tx_gjoexamplevalidation_domain_model_validation (
  uid int(11) NOT NULL auto_increment,
  pid int(11) NOT NULL DEFAULT '0',
  alphanumeric varchar(30) NOT NULL DEFAULT '',
  not_empty varchar(30) NOT NULL DEFAULT '',
  number_range int(11) NOT NULL DEFAULT '0',


  PRIMARY KEY (uid),
  KEY parent (pid),
);