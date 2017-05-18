<?php
$con = mysql_connect("localhost", "root", "");
if(!$con)
{
    exit("Connection refused ".mysql_error());
}
mysql_select_db("finalproject");
?>