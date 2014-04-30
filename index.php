
<?php
$myServer = "http://akhil009.github.io";
$myUser = "root";
$myPass = "";
$myDB = "wsn";

//connection to the database
$dbhandle = mysql_connect($myServer, $myUser, $myPass)
  or die("Couldn't connect to SQL Server on $myServer");

//select a database to work with
$selected = mysql_select_db($myDB, $dbhandle)
  or die("Couldn't open database $myDB");

//declare the SQL statement that will query the database
$query = "select * from mytable order by TIME desc limit 1";
//$query .= "FROM mytable ";

//execute the SQL query and return records
$result = mysql_query($query);

$numRows = mysql_num_rows($result);


//display the results
while($row = mysql_fetch_array($result))
{
  echo $row[0]."  ".$row[1]."   ".$row[2];//."<br/>";
  
}
//close the connection
mysql_close($dbhandle);
?> 
