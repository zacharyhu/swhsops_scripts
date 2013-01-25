#!/bin/bash
#auth huzhiwei

DATE_TODAY=`date +%Y%m%d`
DATE_YES=`date -d -1day +%Y-%m-%d`
DATE_SEL=`date -d -1day +%y%m%d`
DATA_DIR=/web/dataupload
DATA_TODAY=/web/dataupload/$DATE_TODAY


cd $DATA_TODAY



sql=$DATA_TODAY/${DATE_TODAY}_2.sql
sql8=/web/script/dcsql/boss_billing_recharge_daily_import.sql
sql10=/web/script/dcsql/boss_billing_recharge_wxr_daily_import.sql
sql11=/web/script/dcsql/boss_billing_recharge_xgdj_daily_import.sql
sql12=/web/script/dcsql/boss_billing_recharge_zn_daily_import.sql
sql_lucky=$DATA_TODAY/lucky_$DATE_TODAY.sql




if [ -e $sql ];then
rm -rf $sql
echo "rm the exist sql...$sql"
else
echo "no $sql"
fi


#每日新充值记录录入
mysql -h10.48.179.112 -urecharge -pswhsrecharge billing_recharge -N -e"select * from tv_gp_ext_recharge_wasu where l_date=$DATE_SEL;" |awk  '{print "insert into gp_new_recharge VALUE(\""$1"\",\""$2"\",\""$3"\",\""$4"\",\""$5"\",\""$6"\",\""$7"\");"}' >>$sql


sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sql8
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sql10
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sql11
sleep 100
mysql  -h10.48.179.112 -udc -pdc datacenter <$sql12
sleep 100




echo "insert complited at `date +%Y-%m-%d_%T`" >>/web/script/insert.log




