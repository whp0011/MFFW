<?php
/**
 * File name: index.php
 * Desc:
 * Author: hp
 * E-mail: wanghaiping@lecai.com
 * Date Time: 2015/4/1 14:47
 */
use Illuminate\Database\Capsule\Manager as Capsule;

header('Content-type:text/html;charset=utf-8');
// Autoload 自动载入
require '../vendor/autoload.php';

//连接数据库
$capsule = new Capsule;

$capsule->addConnection(require '../config/database.php');

$capsule->bootEloquent();
// 路由配置
require '../config/routes.php';