
<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');


if(!empty($username)){
if(!empty($password)){
  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "mywebsite";
}
else{
    die();
}
}
else{
die();
}

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if(mysqli_connect_error())
{
    die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
}
else
{
    $sql = "select * from login where username ='".$username."'";
}
if ($conn->query($sql))
{
    echo "Login Successfully";
}
else
{
    echo  "Login Failed";
}
$conn->close();
?>
