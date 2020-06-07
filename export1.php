<?php
include("connection.php");
error_reporting(0);
session_start();
 
$filename = "filename";       

    mysqli_select_db ($conn, $DB_TBLName); 
  
    mysqli_set_charset($conn,"utf8");

$sql = "Select * from mensi";

   
 
$result = @mysqli_query($conn, $sql) or die("Couldn't execute query:<br>" . mysqli_error($conn));    
$file_ending = "xls";

header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");

$sep = "\t"; 

$arr=array("matchno","date","matches","venue");
foreach($arr as $value){
    echo $value."\t" ;
}


for ($i = 0; $i < mysqli_num_fields($result); $i++) {
echo mysqli_fetch_field($result,$i) . "\t";
}
print("\n");    

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
        $schema_insert = str_replace($sep."$", "", $schema_insert);
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
    }  
 
?>