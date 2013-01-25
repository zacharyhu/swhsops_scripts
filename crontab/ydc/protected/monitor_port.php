<?php
define("MO_URL", 'http://192.168.52.10/');
$value='{"status":"+OK","gameid":"308","online":"25","con":"1","e":5}';
// $arr=json_decode($value);
// print $arr->{'a'};
// echo "<br>";
// var_dump($arr);
//json数据转php array
$arr2=json_decode(($value),true);
// echo $arr2['a'];
// echo "<br>";
foreach ($arr2 as $key=>$val){
 echo $key."  :  ".$val." <br>";
}
//php数组转json
$arr=array(
  'gameid'=>'305',
  'userid'=>'265478',
  'chg_grade'=>'-1000',
  'chg_esc'=>'-22'
  );
$json_data=json_encode($arr);
var_dump($json_data);
print $json_data;
//php curl 方法
/**
 * Curl版本
 * 使用方法：
 * $post_string = "app=request&version=beta";
 * request_by_curl('http://host/restServer.php',$post_string);
 */
function request_by_curl($remote_server,$post_string){
 $ch = curl_init();
 curl_setopt($ch,CURLOPT_URL,$remote_server);
 curl_setopt($ch,CURLOPT_POSTFIELDS,'datapost='.$post_string);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
 curl_setopt($ch,CURLOPT_USERAGENT,"HU-web");
 $data = curl_exec($ch);
 curl_close($ch);
 return $data;
}
 
$URI='update_grade';
$remote_server=MO_URL.$URI;
echo $remote_server;
request_by_curl($remote_server, $json_data);

 