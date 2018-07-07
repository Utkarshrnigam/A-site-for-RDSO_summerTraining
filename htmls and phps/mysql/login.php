<?php 
if(isset($_POST['sub']))
{
    echo "l";
    
$uname=$_POST['name'];

$pass=$_POST['pass'];
$connection = mysqli_connect('localhost:3308', 'root', '', 'loginapp');
    
    if($connection)
    {
        echo "hi";
    }
    else
    {
        die("database connection failed");
    }
    
    $query="insert into users(username,password)";
    $query .="values('$uname','$pass')";
    $result=mysqli_query($connection,$query);
    
    if($result)
    {
        echo "h";
    }
}
?>

<html>
<body>
<form action="login.php" method="post";>
    <label for="name">Username</label>
    <input type="text" name="name"><br><br>
    <label for="pass">Password</label>
    <input type="password" name="pass"><br><br>
    <input type="submit" name="sub">
</form>    
</body>
</html>