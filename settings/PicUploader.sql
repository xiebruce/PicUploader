SET NAMES utf8mb4;
CREATE TABLE `history` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `filename` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '文件名',
  `url` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '' COMMENT 'url',
  `size` int(11) NOT NULL COMMENT '文件大小',
  `mime` datetime NOT NULL COMMENT '文件mime',
  `created_at` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='PicUploader上传历史记录';