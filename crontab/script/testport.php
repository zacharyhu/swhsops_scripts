<?php 

		require 'finditem.php';
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
         	
         exec('/usr/bin/nc -v -vv -z '.$arrports['host']." ".$arrports['port'],$results,$res_val);
         //print_r($results);
         //print_r($res_val);
         if ($res_val == '0'){//执行成功
         	$arr_rel=array();
         	$arr_rel=$results;
         	if(preg_match('/\bsucceeded/',$arr_rel['0'],$arr_matches)){  //匹配succeeded
         		echo "the".$arrports['item']."--------item-----".$arrports['host']." at ".$arrports['port']." check  succeeded ..at ".date('Y-m-d H:i:s')."<br>";
//          		print_r($arr_matches);
//          		echo "matches ".$arr_matches." times.";
         	}else {//匹配不成功
         		echo "the".$arrports['item']."--------item-----".$arrports['host']." at ".$arrports['port']." check  failed ..at ".date('Y-m-d H:i:s')."<br>";
         	}
         }else {//执行失败
         	echo "exec failed";
         }
         }

?>