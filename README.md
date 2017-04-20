# siee
华广双创内容管理系统，这是一个个人项目。用于学校官网的建设。用的是phpcms<br/>
siees.sql文件是数据库文件<br/>
siees是数据库名字<br/>
数据库配置文件：<br/>
siee/caches/configs/database.php
样式为：


<?php
return array (

	'default' => array (

		'hostname' => 'localhost',

		'port' => 3306,

		'database' => 'siees',

		'username' => 'root',

		'password' => '',

		'tablepre' => 'siee_',

		'charset' => 'utf8',

		'type' => 'mysqli',

		'debug' => true,

		'pconnect' => 0,

		'autoconnect' => 0

		),

);
?>
