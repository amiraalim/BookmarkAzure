<?php

/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql password ***/
$password = 'password';

/***Database name ***/
$dbname = 'bookmark';

/*** GAE mysql username ***/
$username = 'root';

/*** AWS mysql username ***/
//$username ='mysqluser';


/*** AWS db variables ***/
//$dbhost ='aa1bqvobjxv66a7.cudlsl6p6qkx.us-east-1.rds.amazonaws.com';
//$dbport='3306';

/*** GAE db variables ***/
$dbhost1 ='/cloudsql/mybookmarkapps1:bookmark';
$dbhost2 = '173.194.81.211:3306';
$dbport='3306';


/***GAE connection***/
//$sql = new mysqli($hostname,$username,$password,$dbname);

/***DB connection***/
//$sql = mysqli_connect($dbhost, $username, $password, $dbname, $dbport);	

/*** select the database ***/
//$db=mysql_select_db('bookmark');




if (isset($_SERVER['SERVER_SOFTWARE']) &&
  strpos($_SERVER['SERVER_SOFTWARE'],'Google App Engine') !== false) {
    // Connect from App Engine.
    try{
       $sql = mysqli_connect(null, $username, $password, $dbname,  null, $dbhost1);
    }catch(mysqli_sql_exception $ex){ 
      throw $e; 
   } 
  } else {
    // Connect from a development environment.
    try{
       $sql = mysqli_connect($dbhost2,$username,$password,$dbname, $dbport);
    }catch(mysqli_sql_exception $ex){ 
      throw $e; 
   } 
  }




?>

