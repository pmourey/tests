CREATE TABLE IF NOT EXISTS `personnages` (
  `id`     SMALLINT(5) UNSIGNED    NOT NULL AUTO_INCREMENT,
  `nom`    VARCHAR(50)
           COLLATE utf8_general_ci NOT NULL,
  `degats` TINYINT(3) UNSIGNED     NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom` (`nom`)
)
  ENGINE = MyISAM
  DEFAULT CHARSET = utf8
  COLLATE = utf8_general_ci;