insert into dailyreport_vip_data(date,mon_points,mon_num,coin_points,coin_num,ingame_num,incash_num,cash)
select DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%y%m%d') as date,
(SELECT sum( chg_game_points ) as total_points
FROM `point` 
WHERE chg_game_points =100000
AND notes ="gameId:158"
AND done_date between DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 00:00:00') and DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 23:59:59')) as mon_points,
(SELECT count(*) as num
FROM `point` 
WHERE chg_game_points =100000
AND notes ="gameId:158"
AND done_date between DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 00:00:00') and DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 23:59:59')) as mon_num,
(SELECT sum( chg_game_points )AS total_points
FROM `point` 
WHERE chg_game_points !=100000
AND done_date between DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 00:00:00') and DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 23:59:59')
AND notes ="gameId:158") as coin_points,
(SELECT count(DISTINCT member_id )AS num
FROM `point` 
WHERE chg_game_points !=100000
AND done_date between DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 00:00:00') and DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 23:59:59')
AND notes ="gameId:158") as coin_num,
(select count(distinct t1.member_id) 
from 
(select distinct member_id from point where done_date between DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 00:00:00') and DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 23:59:59') and notes='gameId:158') 
as t1,point t2 
where t2.done_date between DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 00:00:00') and DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 23:59:59') 
and t2.notes!='gameId:158' 
and t2.busi_id=202
and t1.member_id=t2.member_id) as ingame_num,
(select (select count(distinct t1.member_id) 
from 
(select distinct member_id from point where done_date between DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 00:00:00') and DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 23:59:59') and notes='gameId:158') 
as t1,point t2 
where t2.done_date between DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 00:00:00') and DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 23:59:59')
and t2.notes!='gameId:158' 
and t2.busi_id=101
and t1.member_id=t2.member_id)
+
(select count(t3.stbid) as num
from
(select distinct(t1.member_id) as memid,t2.vc_stb_id as stbid 
from point t1,action t2  
where  t1.done_date between DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 00:00:00') and DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 23:59:59')  
and t1.notes='gameId:158'  
and t1.member_id=t2.vc_user_id)as t3,gp_new_recharge t4
where t3.stbid=t4.vc_stb_id
and t4.l_date=DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%y%m%d')))
 as incash_num,
(select 
(SELECT  sum(t2.chg_game_points )/7500 AS total_cash2
FROM 
(select distinct member_id from point where done_date between DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 00:00:00') and DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 23:59:59') and notes='gameId:158') 
as t1,point t2
WHERE t2.busi_id ='101'
AND t2.done_date between DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 00:00:00') and DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 23:59:59')
AND t2.chg_game_points ='15000'
AND t1.member_id=t2.member_id)
+
(SELECT sum(t2.chg_game_points )/10000 AS total_cash5
FROM 
(select distinct member_id from point where done_date between DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 00:00:00') and DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 23:59:59') and notes='gameId:158') 
as t1,point t2
WHERE t2.busi_id ='101'
AND t2.done_date between DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 00:00:00') and DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 23:59:59')
AND t2.chg_game_points ='50000'
AND t1.member_id=t2.member_id)
+
(SELECT sum(t2.chg_game_points )/12000 AS total_cash10 
FROM 
(select distinct member_id from point where done_date between DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 00:00:00') and DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 23:59:59') and notes='gameId:158') 
as t1,point t2
WHERE t2.busi_id ='101'
AND t2.done_date between DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 00:00:00') and DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 23:59:59')
AND t2.chg_game_points ='120000'
AND t1.member_id=t2.member_id) 
+
(select sum(t4.l_money)/100 as cash from
(select distinct(t5.member_id) as memid,t6.vc_stb_id as stbid 
from point t5,action t6  
where  t5.done_date between DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 00:00:00') and DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%Y/%m/%d 23:59:59')  
and t5.notes='gameId:158'  
and t5.member_id=t6.vc_user_id)as t3,gp_new_recharge t4
where t3.stbid=t4.vc_stb_id
and t4.l_date=DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 DAY),'%y%m%d')))
as cash;
