<?php 
include ('config.php');
include ('myclass.php');
    $connection = new MySql(SERVERHOST,"chmsc",DBUSER, DBPASS);
    $connection->backup_tables(); /*Save all tables and it values in selected database*/
    $connection->backup_tables("post_table"); /*Saves only table name posts_table from selected database*/
    $connection->closeConnection();
?>