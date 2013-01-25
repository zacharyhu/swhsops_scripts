<?php
$link=mysql_connect('125.210.228.56','bx','bx');
//$link=mysql_connect('125.210.228.137','bx','bx');
if (!$link){
 die ('Could not connect: '.mysql_error());
}

mysql_select_db("billing_recharge",$link);
$nowTime = strtotime("now");
$l_date=date("Y-m-j",$nowTime);
$sql="select * from tv_gp_bx_daily_login where date='".$l_date."' and stbid='".$_GET['stbid']."';";
$l_query=mysql_query($sql,$link);
$ret=mysql_fetch_assoc($l_query);
//取当天登录次数
if( mysql_num_rows($l_query) !== 0){
    //当天登录过则无需进行操作
    echo "there have the stbid :".$ret['stbid']."<br>";
    echo $ret['login_num']."<br><br><br>";
} else {
    //今日登录尚未记录则分析
    //查找该用户连续登录记录
    $sql_user="select * from tv_gp_bx_daily_login where stbid='".$_GET['stbid']."';";
    //echo $sql_user."<br>";
    $l_query_user=mysql_query($sql_user,$link);
    $ret_user=mysql_fetch_assoc($l_query_user);
    //print_r($ret_user);
    if(mysql_num_rows($l_query_user) !==0){
        //echo $ret_user['login_num'];
        //echo $ret_user['date'];
        //echo $ret_user['stbid'];
        $yest_date=mktime(0,0,0,date("m"),date("d")-1,date("Y"));
        //如果获取时间戳为昨天则进行自动加数
        if ($ret_user['date'] == date("Y-m-d",$yest_date)){
           if ($ret_user['login_num'] == '3'){
             //已经连续登录3天，今天登录则送宝箱，添加1个金箱子，登录天数重置为0
             $sql_bx="insert into tv_gp_bx_box_info set vc_stb_id='".$_GET['stbid']."',l_type='202',l_num='1',l_time='".time()."';";
             echo $sql_bx." sql insert golden box <br>";
             $sql_log4="update tv_gp_bx_daily_login set date='".$l_date."',login_num='0' where stbid='".$_GET['stbid']."';";
             echo $sql_log4."sql update login_num <br>";
                 if(!mysql_query($sql_bx,$link)){
                     echo "insert golden box failed : ".mysql_error();
                   }else{
                    echo "insert golden box succ! ";
                   }
                 if(!mysql_query($sql_log4,$link)){
                     echo "update login_num  failed : ".mysql_error();
                   }else{
                    echo "update login_num  succ! ";
                   }
           }else{
             //连续天数少于3天,计数器+1 时间戳更新
             $login_time=$ret_user['login_num']+1;
             echo $login_time." login times!<br>";
             $sql_log3="update tv_gp_bx_daily_login set date='".$l_date."',login_num='".$login_time."' where stbid='".$_GET['stbid']."';";
              if(!mysql_query($sql_log3,$link)){
                     echo "login time less than 3,update login_num  failed : ".mysql_error();
                   }else{
                    echo "login time less than 3,update login_num  succ! ";
                   }
           }
        }else{
          //已经不是昨天登录 计数器重置为1
            $sql_log0="update tv_gp_bx_daily_login date='".$l_date."',login_num='1' where stbid='".$_GET['stbid']."';";
             if(!mysql_query($sql_log0,$link)){
                     echo "yesterday not login,login update login_num  failed : ".mysql_error();
                   }else{
                    echo "yes not login,update login_num  succ! ";
                   }
        }
    }else{
    $sql_insert="insert into tv_gp_bx_daily_login set date='".$l_date."',stbid='".$_GET['stbid']."',login_num=1;";
    if(!mysql_query($sql_insert,$link)){
       echo "insert new login user failed : ".mysql_error();
       }else{
       echo "insert new login user succ! ";
     }
    }
}




?>
