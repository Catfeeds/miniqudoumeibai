<?php
return array(
	//'配置项'=>'配置值'
	
// +----------------------------------------------------------------------
// | 数据库配置设定
// +----------------------------------------------------------------------		
	'DB_TYPE'               =>  'mysql',        // 数据库类型
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'lr_',       // 数据库表前缀   ！开发时配置常量 ！
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8		
// +----------------------------------------------------------------------
// | 弹性WEB服务器和数据库
// +----------------------------------------------------------------------
//  'DB_HOST'               =>  'rm-bp12j54a6nuw04l8t.mysql.rds.aliyuncs.com', // 服务器地址
//  'DB_NAME'               =>  'r6hpk2l184',          // 数据库名
//  'DB_USER'               =>  'r6hpk2l184',      // 用户名
//  'DB_PWD'                =>  'leren888_win',//'1234QWERasdf',          // 密码
// +----------------------------------------------------------------------
// | 本地测试服务器和数据库
// +----------------------------------------------------------------------  	 
	'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'minixiecaibaocai',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'leren888*',      //'1234QWERasdf',          // 密码
    'content'=>array(
        'dir' =>"/minixiecaibaocai/Data/"
    ),
    'wxpay'  =>array(
        'applyshop_notify_url'=>"https://gzleren.com/minixiecaibaocai/index.php/Api/Applyshop/wxnotifyurl",
        'wx_notify_url'       =>"https://gzleren.com/minixiecaibaocai/index.php/Api/Pay/wxnotifyurl",
        'wx_rznotify_url'       =>"https://gzleren.com/minixiecaibaocai/index.php/Api/Pay/wxrznotifyurl"
    ),
    'weixin' => array(
        'appid'  => 'wx2ba518f4bb9fccc0', 
        'secret' => 'd65af36e27210b63d2008aa330a902d8',
        'key'    => 'XIWmy5UAs37TeNquZOAtjollVK9yJFaX',
        'mchid'  => '1474898802'
    ),		

);