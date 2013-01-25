<?php
    $count_id = $_GET['n'];
    $gate_type = $_GET['g'];     

    $con = mysql_connect("10.48.179.112","dc","dc");
if (!$con)
 {
  die('Could not connect: '.mysql_error());
 }
mysql_select_db("datacenter",$con);
$sql = "insert into z_count_log set count_id='".$count_id."',gate_type='".$gate_type."';";
echo $sql;
if(!mysql_query($sql,$con)){
    echo "添加数据失败：".mysql_error();
} else {
    echo "添加数据成功！";
}

   $fp=fopen("/web/vistlog/$count_id.log",'a');
   if(!$fp){
     echo "open file failed..";
   }else{
     fwrite($fp,"count_id ".$count_id." click at ".date("Y-m-d H:i:s"."\n"));
   }
   fclose($fp);


?>
