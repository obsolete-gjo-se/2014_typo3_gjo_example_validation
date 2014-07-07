CREATE TABLE tx_gjoskeleton_domain_model_examplemodel (
  uid int(11) NOT NULL auto_increment,
  pid int(11) NOT NULL DEFAULT '0',

  PRIMARY KEY (uid),
  KEY parent (pid),
);