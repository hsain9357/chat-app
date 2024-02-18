<?php
$env = file_get_contents( __DIR__."/../" .".env");
$lines = explode("\n",$env);

foreach($lines as $line){
  preg_match("/([^#]+)\=(.*)/",$line,$matches);
  if(isset($matches[2])){
    putenv(trim($line));

}

}

 // Retrive env variable
  //$username = getenv('USER_NAME');
//  $hostname = getenv('HOST');
 // $password = getenv('PASSWORD');
//  $dbname = getenv('sql5680846');

  $hostname = "localhost:3306";
  $username = "hussein";
  $password = "password";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
