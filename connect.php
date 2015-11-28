<?php
session_start();
$con=@mysql_connect('localhost','root','');
$db=mysql_select_db('mas');

if(!$db)
{
  echo "no";
}
