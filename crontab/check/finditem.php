<?php
     include 'inc.db.conf.php';
     
     
     $sql="select item_id,item_name,item_host,item_port from monitor_moniter_port_list";
     
     $rel = mysql_query($sql,$mysqllink);
     
     $arr_rows = mysql_num_rows($rel);
     $array_port_list=array();
     if ($arr_rows>0){
     	while ($arr_rel=mysql_fetch_array($rel)){
//      		echo "array begin<br>";
//      		print_r(array('item'=>$arr_rel['item_name'],'host'=>$arr_rel['item_host'],'port'=>$arr_rel['item_port']));
//      		echo "array end<br>";
     		array_push($array_port_list,array('item_id'=>$arr_rel['item_id'],'item'=>$arr_rel['item_name'],'host'=>$arr_rel['item_host'],'port'=>$arr_rel['item_port']));
     }
     //$array_port_list is the list arr from mysql and need to be checked
     //all data format is array(checkitem => array('host','port'))
//      print_r($array_port_list);
//      echo "end <br>";
     }else{
     	echo "there is no arr list";
     }
     
     
     
     function insertFailRecords($item_id,$item_name,$check_status){//插入失败数据记录check_status 0失败、1成功
     	require 'inc.db.conf.php';
     	$sql_check_exist="select * from monitor_check_port_status where item_id=".$item_id;
     	$rel_exist=mysql_query($sql_check_exist,$mysqllink) or die( " check exist record failed  ......".mysql_errno());
     	$rows_exist=mysql_num_rows($rel_exist);
     	if(empty($rows_exist)){//没有记录
     		if ($check_status=='0'){//记录为失败
     		$sql_fail="insert into monitor_check_port_status(item_id,item_name,check_status,check_last_time,failed_times) values('".$item_id."','".$item_name."','".$check_status."','".date('Y-m-d H:i:s')."','1')";
//      		echo $sql_fail.' <br> ----------------fail record sql----------------<br>';
//      		return $sql_fail;
     		}else {
     			$sql_fail="insert into monitor_check_port_status(item_id,item_name,check_status,check_last_time,failed_times) values('".$item_id."','".$item_name."','".$check_status."','".date('Y-m-d H:i:s')."','0')";
//      			echo $sql_fail.' <br> ----------------suc record sql----------------<br>';
//      			return $sql_fail;		
     		}
     	}else {//有记录则更新
     		if ($check_status=='0'){//记录为失败
     			$sql_fail="update monitor_check_port_status set failed_times=failed_times+1,check_last_time='".date('Y-m-d H:i:s')."',item_name='".$item_name."' where item_id='".$item_id."'";// 次数+1 
//      			echo $sql_fail.' <br> ----------------fail record sql----------------<br>';
//      			return $sql_fail;
     		}else {
     		$sql_fail="update monitor_check_port_status set failed_times=0,check_last_time='".date('Y-m-d H:i:s')."',item_name='".$item_name."' where  item_id='".$item_id."'";
//      		echo $sql_fail.' <br> ----------------suc record sql----------------<br>';
//      		return $sql_fail;
     	}
     	}
     	echo $sql_fail."---------------sql<br>";
     	$rel_query_fail=mysql_query($sql_fail,$mysqllink);
     	if($rel_query_fail){
     		print_r($rel_query_fail);
     		echo "insert succeeded......<br>".mysql_errno();
     	}else{
     		echo "insert failed.....<br>".mysql_errno();
     	}
     	
     }

     
     
     
//      mysql_close($mysqllink);
     
     
     