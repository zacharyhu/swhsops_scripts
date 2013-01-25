<?php 
//   包含 memcached 类文件 
require_once('memcached-client.php'); 
//   选项设置 
$options = array( 
     'servers' => array('127.0.0.1:11211'), //memcached 服务的地址、端口，可用多个数组元素表示多个 memcached 服务 
     'debug' => true,   //是否打开 debug 
     'compress_threshold' => 10240,   //超过多少字节的数据时进行压缩 
     'persistant' => false   //是否使用持久连接 
     ); 
//   创建 memcached 对象实例 
$mc = new memcached($options); 
//   设置此脚本使用的唯一标识符 
$key1 = 'mykey'; 
$key2 = 'mykey2';
//   往 memcached 中写入对象 
$mc->add($key1, 'some random strings'); 
$mc->add($key2, 'some random strings2'); 
$val = $mc->get($key1); 
$keys = array(
'mykey',
'mykey2',
);
$val2 = $mc->get_multi($keys);//以数组中的键值获取一个数组的数据
//echo "n".str_pad('$mc->add() ', 60, '_')."n"; 
var_dump($val); 
echo "get_multi:\r\n";
var_dump($val2); 
//   替换已写入的对象数据值 
$mc->replace($key1, array('some'=>'haha', 'array'=>'xxx')); 
$val = $mc->get($key1); 
//echo "n".str_pad('$mc->replace() ', 60, '_')."n"; 
var_dump($val); 
//   删除 memcached 中的对象 
$mc->delete($key1); 
$val = $mc->get($key1); 
//echo "n".str_pad('$mc->delete() ', 60, '_')."n"; 
var_dump($val); 
?>





