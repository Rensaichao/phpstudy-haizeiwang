<?php
$conn = mysql_connect( "localhost", "root", "root" )or die( "连接MySQL出现错误" );
mysql_select_db( "db_42012", $conn )or die( "false" );
mysql_query( "set character set 'utf8'" );
?>