<?php
$host="localhost";
$user="root";
$password="";
$db="user";

$data=mysqli_connect($host,$user,$password,$db);

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username=$_POST["username"];
    $password=$_POST["password"]; //recieve uname and pass

    $sql="select * from login where username='".$username."' AND password='".$password."'";

    $result=mysqli_query($data, $sql);

    $row=mysqli_fetch_array($result);

    if($row["status"]=="ya"){
        header("location:lulus.php");
    }elseif($row["status"]=="tidak"){
        header("location:tidaklulus.php");
    }else{
        echo"username and pass incorrect";
    }

}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Pengumuman LDKO 2021</title>
</head>

<body>
<center>
    <h1>Login LDKO</h1>
    <br><br><br><br>
    <div style="background-color: violet; width: 500px;">
    <br><br>

    <form action="#" method="POST">
    <div>
        <label>username</label>
        <input type="text" name="username" required>
    </div>
    <br>
    <div>
        <label>password</label>
        <input type="password" name="password" required;>
    </div>

    <div>
        <input type="submit" value="Login">
    </div>
    </form>

    <br><br>
    </div>
</center>
</body>
</html>
