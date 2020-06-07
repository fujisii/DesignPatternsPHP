<?php
require_once 'DisplaySourceFileImpl2.class.php';

/**
 * DisplaySourceFileImpl2クラスをインスタンス化する。
 * 内容を表示するファイルは、「ShowFile.class.php」
 */
$show_file = new DisplaySourceFileImpl2('./ShowFile.class.php');

/**
 * プレーンテキストとハイライトしたファイル内容をそれぞれ
 * 表示する
 */
$show_file->display();