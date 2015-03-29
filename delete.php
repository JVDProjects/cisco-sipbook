<?php
//Connect to DB
include "conf.php";
if(!empty($_POST))
{
    $delete_id = mysql_real_escape_string($_POST['delete_id']);
    $result = mysql_query("DELETE FROM records WHERE `records_id`=".$delete_id);
    if($result !== false) {
        echo 'true';
    }
}
?>