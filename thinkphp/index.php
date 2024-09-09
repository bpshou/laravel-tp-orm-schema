<?php

require_once "./vendor/autoload.php";

use think\facade\Db;
// 数据库配置信息设置（全局有效）
Db::setConfig([
    // 默认数据连接标识
    'default'     => 'mysql',
    // 数据库连接信息
    'connections' => [
        'mysql' => [
            // 数据库类型
            'type'     => 'mysql',
            // 主机地址
            'hostname' => 'localhost',
            // 主机端口
            'hostport' => '3306',
            // 用户名
            'username' => 'root',
            // 数据库密码
            'password' => '',
            // 数据库名
            'database' => 'database',
            // 数据库编码默认采用utf8
            'charset'  => 'utf8',
            // 数据库表前缀
            'prefix'   => 'think_',
            // 数据库调试模式
            'debug'    => true,
        ],
    ],
]);

$user = Db::table('user')->where('uid', 100)->find();

var_dump($user);
