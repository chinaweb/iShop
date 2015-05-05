<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 定义框架路径
define('THINK_PATH', realpath('../ThinkPHP') . '/');

// 定义项目路径
define('APP_PATH', realpath('../Application') . '/');

// 定义调试模式和应用模式
define('APP_DEBUG', TRUE);

// 定义运行时目录
define('RUNTIME_PATH', APP_PATH . '/Runtime/');

// 不生产目录安全文件
define('BUILD_DIR_SECURE', FALSE);

// 载入框架入口文件（必须）
require THINK_PATH . 'ThinkPHP.php';