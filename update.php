<?php
if(!empty($_POST))
{
//Connect to DB
    include "conf.php";
    foreach($_POST as $field_name => $val)
    {
//Clean post values
    $field_userid = strip_tags(trim($field_name));
    $val = strip_tags(trim(mysql_real_escape_string($val)));

//From the fieldname:user_id we need to get user_id
    $split_data = explode(':', $field_userid);
    $user_id = $split_data[1];
    $field_name = $split_data[0];
    if(!empty($user_id) && !empty($field_name) && !empty($val))
    {
//Update the values
    mysql_query("UPDATE records SET $field_name = '$val' WHERE records_id = $user_id") or mysql_error();
        echo "Updated";
    } else {
        echo "Invalid Requests";
    }
    }
    } else {
        echo "Invalid Requests";
    }
?>