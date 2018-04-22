<?php

mysql_connect("localhost","root","") or die("Connection Error: ".mysql_error());
mysql_select_db("epolling") or die("Database Error: ".mysql_error());
$cid=$_GET['c_id'];

$result=mysql_query("SELECT photo FROM candidate_reg where c_id=$cid");

if($row=mysql_fetch_array($result))
{
    $img=$row[0];
    header("Content-type:image/jpeg");
    echo "$img";
}
?>