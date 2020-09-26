<?php

 $Connect = mysqli_connect("localhost","root","","mash");

 if($Connect===false)
 {
    die("Error");
 }
 
 $sql = "Select * from user_login";
 $result = mysqli_query($Connect,$sql);
 $filename = "excelfilename.xls";  

 
 $file_ending = "xls";

//header info for browser
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename");  
header("Pragma: no-cache"); 
header("Expires: 0");
/*******Start of Formatting for Excel*******/   
//define separator (defines columns in excel & tabs in word)
$sep = "\t"; //tabbed character
while ($property = mysqli_fetch_field($result)) {
    echo $property->name."\t";
}

print("\n");    
//end of printing column names  
//start while loop to get data
    while($row = mysqli_fetch_row($result))
    {
        $schema_insert = "";
        for($j=0; $j<mysqli_num_fields($result);$j++)
        {
            if(!isset($row[$j]))
                $schema_insert .= "NULL".$sep;
            elseif ($row[$j] != "")
                $schema_insert .= "$row[$j]".$sep;
            else
                $schema_insert .= "".$sep;
        }
        // $schema_insert = str_replace($sep."$", "", $schema_insert);
        // $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        // $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
    }   
?>