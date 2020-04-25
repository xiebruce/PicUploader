-- auto-generated definition
CREATE TABLE `history` (
    `id`            INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    `filename`      VARCHAR(200) NOT NULL DEFAULT '',
    `url`           VARCHAR(500) NOT NULL DEFAULT '',
    `size`          INTEGER(11) NOT NULL DEFAULT 0,
    `mime`          VARCHAR(50) NOT NULL DEFAULT '',
    `md5`           VARCHAR(32) NOT NULL DEFAULT '',
    `upload_server` VARCHAR(16) NOT NULL DEFAULT '',
    `created_at`    DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE INDEX inx_md5
    ON `history` (md5);

