<?php
return array(
/* 开启路由,这个版本不能用，只能在模块配置文件里配置。3.2.3版本可以在项目配置文件里配置。
*'URL_ROUTER_ON'   => true
*/
	'SESSION_AUTO_START' => true, //是否开启session

	//数据库配置
	'DB_CONFIG' => array(
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '127.0.0.1', // 服务器地址
	'DB_NAME'   => 'uav', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '1234', // 密码
	'DB_PORT'   => '3306', // 端口
	'DB_PREFIX' => '', // 数据库表前缀
	'DB_CHARSET'=> 'utf8', // 字符集
	// 'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
	),);
