<?php
$dir = __DIR__;             // 需要打包的目录
$file = 'BaiduBce.phar';      // 包的名称, 注意它不仅仅是一个文件名, 在stub中也会作为入口前缀
$phar = new Phar(__DIR__ . '/' . $file, FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME, $file);
// 开始打包
$phar->startBuffering();
$phar->buildFromDirectory($dir);
// 把build.php本身摘除
$phar->delete('PharBuilder.php');
// 设置默认入口
$phar->setStub("<?php
Phar::mapPhar('{$file}');
require 'phar://{$file}/index.php';
__HALT_COMPILER();
?>");

$phar->stopBuffering();
// 打包完成
echo "Finished {$file}\n";
