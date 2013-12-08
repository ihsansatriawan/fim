<?php

$conn = mysql_connect("localhost", "root", "");
if($conn)
{
    $select=mysql_select_db("db_fim");
    if(!$select)
    {
        echo mysql_error();
    }
}
?>