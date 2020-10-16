<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$var = parse_ini_file('var.ini', true);

$config['app_id']	= $var['basic_info']['app_id'];
$config['app_name']	= $var['basic_info']['app_name'];

?>