#!/bin/bash
#auth huzhiwei

DATE_TODAY=`date +%Y%m%d`
DATE_YES=`date -d -1day +%Y-%m-%d`
DATE_SEL=`date -d -1day +%y%m%d`
DATA_DIR=/web/dataupload
DATA_TODAY=/web/dataupload/$DATE_TODAY


cd $DATA_TODAY



sql=$DATA_TODAY/$DATE_TODAY.sql
sql3=/web/script/dcsql/gp_chg_daily_import.sql
sql4=/web/script/dcsql/user_report_daily_import.sql
sql5=/web/script/dcsql/boss_cash_daily_import.sql
sql6=/web/script/dcsql/vip_daily_import.sql
sql7=/web/script/dcsql/game_daily_import.sql
sql8=/web/script/dcsql/boss_billing_recharge_daily_import.sql
sql9=/web/script/dcsql/boss_billing_recharge_mxd_daily_import.sql
sql10=/web/script/dcsql/boss_billing_recharge_wxr_daily_import.sql
sql11=/web/script/dcsql/boss_billing_recharge_xgdj_daily_import.sql
sql12=/web/script/dcsql/boss_billing_recharge_zn_daily_import.sql
sql14=/web/script/dcsql/boss_billing_recharge_xy_daily_import.sql
sql13=/web/script/dcsql/recharge_daily_import.sql
sqlu1=/web/script/dcsql/user_active_daily_import101.sql
sqlu2=/web/script/dcsql/user_active_daily_import201.sql
sqlu3=/web/script/dcsql/user_active_daily_import301.sql
sqlu4=/web/script/dcsql/user_active_daily_import401.sql
file1=$DATA_TODAY/data_action_$DATE_YES.csv
file2=$DATA_TODAY/data_point_$DATE_YES.csv
file3=$DATA_TODAY/data_userinfo_$DATE_YES.csv
db8633=/data/game_172/huanlegu/singlegame/login.db3
dbgame=/data/game_data/game_value_busi.db
dbwxr=/data/game_wxr/login.db3

db172=/data/game_172/lucky/Ttable.db
sql_lucky=$DATA_TODAY/lucky_$DATE_TODAY.sql




if [ -e $sql ];then
rm -rf $sql
echo "rm the exist sql...$sql"
else
echo "no $sql"
fi


#新框架游戏在线记录
echo "select * from tv_gp_user_game_value_busi where l_date="$DATE_SEL";" |/usr/bin/sqlite3 $dbgame |awk -F\| '{print "insert into game_value VALUE(\""$1"\",\""$2"\",\""$3"\",\""$4"\",\""$5"\",\""$6"\",\""$7"\",\""$8"\",\""$9"\",\""$10"\",\""$11"\",\""$12"\");"}'  >>$sql
echo "select * from tv_gp_user_game_online_busi where l_date="$DATE_SEL";" |/usr/bin/sqlite3 $dbgame |awk -F\| '{print "insert into game_online VALUE(\""$1"\",\""$2"\",\""$3"\",\""$4"\",\""$5"\");"}' >>$sql
#欢乐谷游戏点及登录记录
echo "select * from TUserLogin where l_date="$DATE_SEL";" |/usr/bin/sqlite3 $db8633 |awk -F\| '{print "insert into hlg_login VALUE(\""$1"\",\""$2"\",\""$3"\",\""$4"\");"}' >>$sql
echo "select * from TUserCoin where l_date="$DATE_SEL";" |/usr/bin/sqlite3 $db8633 |awk -F\| '{print "insert into hlg_coin VALUE(\""$1"\",\""$2"\",\""$3"\",\""$4"\",\""$5"\");"}' >>$sql
echo "select * from TUserLogin where l_date="$DATE_SEL";" |/usr/bin/sqlite3 $dbwxr |awk -F\| '{print "insert into hlg_login VALUE(\""$1"\",\""$2"\",\""$3"\",\""$4"\");"}'   >>$sql
#每日新充值记录录入
mysql -h10.48.179.112 -urecharge -pswhsrecharge billing_recharge -N -e"select * from tv_gp_ext_recharge_wasu where l_date=$DATE_SEL;" |awk  '{print "insert into gp_new_recharge VALUE(\""$1"\",\""$2"\",\""$3"\",\""$4"\",\""$5"\",\""$6"\",\""$7"\");"}' >>$sql
#oracle数据库中新用户注册及游戏点变化记录录入
awk -F, 'NR!=1 {print "insert into action VALUE(\""$1"\",\""$2"\",\""$3"\");"}' $file1 >>$sql
awk -F, 'NR!=1 {print "insert into point VALUE(\""$1"\",\""$2"\",\""$3"\",\""$4"\",\""$5"\",\""$6"\",\""$7"\");"}' $file2 >>$sql
awk -F, 'NR!=1 {print "insert into gp_user_info  set vc_stb_id=\""$1"\",member_id=\""$2"\",member_name=\""$3"\",login_name=\""$4"\",member_status=\""$5"\",game_points=\""$6"\",vip_level=\""$7"\",create_date=\""$8"\",done_date=\""$9"\"  on duplicate key update vc_stb_id=\""$1"\",member_id=\""$2"\",member_name=\""$3"\",login_name=\""$4"\",member_status=\""$5"\",game_points=\""$6"\",vip_level=\""$7"\",create_date=\""$8"\",done_date=\""$9"\";"}' $file3 >>$sql

echo "select * from T_DaySum where ITIME=$DATE_SEL;" |sqlite3 $db172 |awk -F\| '{print "insert into event_lucky_daysum VALUES (\""$1"\",\""$2"\",\""$3"\",\""$4"\",\""$5"\");"}' >>$sql_lucky
echo "select * from T_Goods where ITIME=$DATE_SEL;" |sqlite3 $db172 |awk -F\| '{print "insert into event_lucky_Goods VALUES (\""$1"\",\""$2"\",\""$3"\",\""$4"\",\""$5"\",\""$6"\");"}' >>$sql_lucky
echo "select * from T_lucky where ITIME =$DATE_SEL;" |sqlite3 $db172 |awk -F\| '{print "insert into event_lucky_lucky VALUES (\""$1"\",\""$2"\",\""$3"\",\""$4"\",\""$5"\",\""$6"\");"}' >>$sql_lucky


mysql -h10.48.179.112 -udc -pdc datacenter <$sql
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sqlu1
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sqlu2
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sqlu3
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sqlu4
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sql3
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sql4
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sql5
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sql6
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sql7
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sql8
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sql9
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sql10
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sql11
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sql12
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sql13
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sql_lucky




echo "insert complited at `date +%Y-%m-%d_%T`" >>/web/script/insert.log




