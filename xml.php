<?php

//Get DB information
    include "conf.php";

//Get data from table
    $sql = "SELECT * FROM records ORDER BY name";

    $result = mysql_query($sql);
    if (!$result) {
        die('Invalid query: ' . mysql_error());
    }

//Start building XML file
    $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

    $xml .= "<CiscoIPPhoneDirectory>\n";
    $xml .= "<Title>$title</Title>\n";
    $xml .= "<Prompt>Select</Prompt>\n";

while ($row = mysql_fetch_array($result))
    {
        $xml .= "<DirectoryEntry>\n";
        $xml .= "<Name>";
        $xml .= $row["name"];
        $xml .= "</Name>\n";
        $xml .= "<Telephone>";
        $xml .= $row['number'];
        $xml .= "</Telephone>\n";
        $xml .= "</DirectoryEntry>\n";
    }

//Close the XML feed
    $xml .= "</CiscoIPPhoneDirectory>\n";

//Send the XML header to the browser
    header ("Content-Type:text/xml");

//Output the XML feed to the browser
    echo $xml;

//Save output to XML file
    $export = fopen($filename.'.xml','w+');
    fwrite($export,$xml);
    fclose($export);
?>