
<?php
// createTableUsers.php
// version 1.0
// Generation Time: 19/3/14
// Server version: 5.6.11 MySQL Community Server (GPL)
// PHP Version: 5.5.3
// Database: `user_logon`
// --------------------------------------------------
// This file creates a database called user_logon.
// This file also establishes a connection to MySQL,
// and creates the database and then, a table called Users.
// If the database or the table could not be created,
// an error message is created.
// --------------------------------------------------
$host="localhost"; // Host name
$username="root"; // Mysql username - USING ROOT IS INSECURE
$password=""; // Mysql password - BLANK PASSWORD IS INSECURE
$db_name="UserData"; // Database name
$tbl_name="Users"; // Table name
 
 //Connect to MySQL server using localhost as root user.
 $con=mysqli_connect($host,$username,$password);
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
 
// Create database
//CREATE DATABASE IF NOT EXISTS site_db;
 $sql="CREATE DATABASE UserData";
 if (mysqli_query($con,$sql))
  {
  echo "Database created successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }
 
//Table structure for table `Users`
if(!$con )
{
  die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br />';
$sql = ("CREATE TABLE Users(
       id INT(4) NOT NULL auto_increment,
       username VARCHAR(65) NOT NULL,
       password VARCHAR(65) NOT NULL,
       PRIMARY KEY (id))");
 
//flush???
//USE user_logon;
mysqli_select_db($con, 'UserData')or die("cannot select database");
 
$retval = mysqli_query($con, $sql); //mysqli_query always returns true if there was no error.
if(!$retval)
{
  die('Could not create table: ' . mysql_error());
}
else
{
  echo "Table created successfully\n";
}
mysqli_close($con);
 
 ?>