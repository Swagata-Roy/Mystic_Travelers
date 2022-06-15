<?php
$serverName="sql.bsite.net\MSSQL2016";//serverName\instanceName
     $Name = $_POST['Name'];
     $Email = $_POST['Email'];
     $Message = $_POST['Message'];
$connectionInfo=array("UID" => "mystictravelers_",  "PWD" => "Working in",  "Database" => "mystictravelers_");
$conn=sqlsrv_connect($serverName,$connectionInfo);

if($conn){
echo"Connection established.<br/>";
}else{
echo"Connection could not be established.<br/>";
die(print_r(sqlsrv_errors(),true));
}

$sql = "INSERT INTO CONTACTUS(NAME
      ,EMAIL
      ,MESSAGE) VALUES('$Name','$Email','$Message')";  

/* Execute the query. */  

$results = sqlsrv_query( $conn, $sql);  

if ( $results )  
{  
     echo "Submitted Successfully.";  
}   
else   
{  
     echo "Error in statement execution.";  
}  
?>
