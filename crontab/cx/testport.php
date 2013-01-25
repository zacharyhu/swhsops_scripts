<?php 

		require 'finditem.php';
		require 'inc.db.conf.php';
          // $host = "10.48.179.117";
          // $port = "8601"; 
         
         /*$arr_list = array(
         		"item"=>"port1","host"=>"10.48.179.117","port"=>"8601",
         		"item"=>"port2","host"=>"10.48.179.117","port"=>"8602",
         		"item"=>"port3","host"=>"10.48.179.117","port"=>"8603",
         		"item"=>"port4","host"=>"10.48.179.117","port"=>"8604",
         		"item"=>"port5","host"=>"10.48.179.117","port"=>"8605",
         		"item"=>"port6","host"=>"10.48.179.117","port"=>"8606",
         		);  */
		 $arr_list = $array_port_list;
		
		 
// 		 echo "-----------------------------------new----------<br>";
// 		 print_r($arr_list)."------------</br>";
		 
// 		 echo "-----------------------------------end ----------</br>";
		 
		 
         foreach ($arr_list as $items=>$arrports){
//          	print_r($arrports);
//          	echo $items.'=====rrrrr====</br>';
         //测试用	
//          ---------------------ceshibufen------------
         exec('/usr/bin/nc -v -vv -z '.$arrports['host']." ".$arrports['port'],$results,$res_val);//测试
//          $res_val = '0';//测试测试测试
         //
         //print_r($results);
         //print_r($res_val);
         if ($res_val == '0'){//执行成功
         	$arr_rel=array();
         	
         	
         	//测试用
//          	--------------------ceshibufen--------
         	$arr_rel=$results;//测试
//          	$arr_rel['0']='succeeded';//测试测试测试
//          	echo $arr_rel['0'];
         	
         	if(preg_match('/\bsucceeded/',$arr_rel['0'],$arr_matches)){  //匹配succeeded
//          		echo "the  id  ".$arrports['item_id']." item_name ----".$arrports['item']."--------item-----".$arrports['host']." at ".$arrports['port']." check  succeeded ..at ".date('Y-m-d H:i:s')."<br>";
         		//端口检查成功的插入端口检查记录
         		insertFailRecords($arrports['item_id'], $arrports['item'], '1');//插入成功记录
//          		print_r($arr_matches);
//          		echo "matches ".$arr_matches." times.";
    		
         	}else {//匹配不成功
         		//端口检查不成功，插入数据库记录
         		
//          		echo "the id  ".$arrports['item_id']." item_name ----".$arrports['item']."--------item-----".$arrports['host']." at ".$arrports['port']." check  failed ..at ".date('Y-m-d H:i:s')."<br>";
         		insertFailRecords($arrports['item_id'], $arrports['item'], '0');//插入失败记录
         	}
         }else {//执行失败
         	echo "exec failed";
         	insertFailRecords($arrports['item_id'], $arrports['item'], '0');//插入失败记录
         }
         }

?>