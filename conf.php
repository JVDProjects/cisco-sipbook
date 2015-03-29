<?php
    //Configuration settings
    $mysqlhost = "localhost"; //Database host
    $mysqluser = "mylogin"; //Database username
    $mysqlpass = "mypass"; //Database password
    $mysqldb = "sipbook"; //Database name
    $title = "Business"; //Title of your phonebook directory
    $filename = "phonebook"; //Name of the XML file

//Connect to host
    mysql_connect($mysqlhost,$mysqluser,$mysqlpass);
//Select DB
    @mysql_select_db($mysqldb) or die( "Unable to select database");
?>