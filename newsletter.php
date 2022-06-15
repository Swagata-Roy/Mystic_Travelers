<?php
$serverName="sql.bsite.net\MSSQL2016";//serverName\instanceName
     $Email = $_POST['email'];
$connectionInfo=array("UID" => "mystictravelers_",  "PWD" => "Working in",  "Database" => "mystictravelers_");
$conn=sqlsrv_connect($serverName,$connectionInfo);

if($conn){
echo"Connection established.<br/>";
}else{
echo"Connection could not be established.<br/>";
die(print_r(sqlsrv_errors(),true));
}

$sql = "INSERT INTO NEWSLETTER(EMAIL) VALUES('$Email')";  

/* Execute the query. */  

$results = sqlsrv_query( $conn, $sql);  

if ( $results )  
{  
     echo "Subscribed.";  
}   
else   
{  
     echo "Error in statement execution.";  
}  
?>
