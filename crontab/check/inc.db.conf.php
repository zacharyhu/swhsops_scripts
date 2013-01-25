<?php
		$mysqllink=@mysql_connect('10.48.179.112','dc','dc')or die("mysql connect error");
		$db_select=@mysql_select_db("gp_platform")or die(" db select error");
		mysql_set_charset("utf8",$mysqllink);
