<?php
//header('Content-Type: application/force-download');
//header('Content-Disposition: attachment; filename='.$stb.'_'.date('y-m-d').'.xls');
        $sql="SELECT t1.vc_stb_id, t1.member_id, t1.l_money, t1.l_date, t1.l_time, t2.name
              FROM gp_recharge_his t1, gp_recharge_cp t2 
              WHERE 
              t1.l_type = t2.l_type
              AND t1.vc_stb_id ='".$stb."'
              AND t1.l_date  BETWEEN  '".$datebegin."'  AND '".$dateend."'
              order by t2.name,t1.l_date desc,t1.l_time desc;";
        $result=mysql_query($sql);
	    $cols=mysql_num_fields($result); 
	    if(!empty($result)){
              echo '<table>';
              echo '<tr>';
              echo '<th>机顶盒号</th>';
              echo '<th>亿家游id</th>';
              echo '<th>金额</th>';
              echo '<th>日期</th>';
              echo '<th>扣费类别</th>';
              echo '</tr>';
              while($row=mysql_fetch_assoc($result)){
                    echo '<tr>';
                    foreach($row as $col){
                           echo '<td>'.$col.'</td>';
                    }
                    echo '</tr>';
              }
               echo '</table>';
	    }
