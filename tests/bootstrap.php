<?php
/**
 * @copyright (c) 2018, sunny-daisy 
 * all rights reserved.
 *
 * phpunit bootstrap.php 
 *
 * @author  yanmin1@staff.sina.com.cn
 * @cdate   Thu Jul 26 16:59:45 CST 2018
 */
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
} else {
    throw new Exception('Can not find autoload.php');
}
