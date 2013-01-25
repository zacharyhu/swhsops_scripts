<?php
$gate=$_GET['gate'];
$stbid=$_GET['stbid'];
$code=$_GET['code'];
$city=$_GET['city'];
$con = mysql_connect("10.48.179.112","dc","dc");
if (!$con)
 {
  die('Could not connect: '.mysql_error());
 }
mysql_select_db("datacenter",$con);
$sql = "insert into z_gamehall_log set v_source='".$_GET['gate']."',v_stbid=".$_GET['stbid'].",v_city=".$_GET['city'].",v_code=".$_GET['code'].";";
echo $sql;
if(!mysql_query($sql,$con)){
    echo "添加数据失败：".mysql_error();
} else {
    echo "添加数据成功！";
}
if($gate=='gonggao'){
   $fp=fopen('/web/vistlog/game_hall_wd_vist.log','a');
   if(!$fp){
     echo "open file failed..";
   }else{
     fwrite($fp,"stbid: ".$stbid." code:".$code." city:".$city." login at ".date("Y-m-d H:i:s"."\n"));
   }
   fclose($fp);
   }elseif($gate=='hotel'){
   $fp2=fopen('/web/vistlog/hotel.log','a');
   if(!$fp2){
     echo "open file failed..";
   }else{
   fwrite($fp2,$stbid." login at ".date("Y-m-d H:i:s"."\n"));
   }
   fclose($fp2);
}
?>
