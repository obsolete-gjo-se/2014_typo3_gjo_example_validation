CREATE TABLE tx_gjoexamplevalidation_domain_model_validation (
  uid int(11) NOT NULL auto_increment,
  pid int(11) NOT NULL DEFAULT '0',
  string_without_break varchar(30) NOT NULL DEFAULT '',


  PRIMARY KEY (uid),
  KEY parent (pid),
);