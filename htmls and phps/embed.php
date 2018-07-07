<?php 
if(isset($_POST['sub']))
{
    
$uname=$_POST['name'];

$pass=$_POST['pass'];

    echo "hello"." ".$uname;
}
?>

<html>
<body>
<form action="embed.php" method="post";>
    <input type="text" name="name">
    <input type="password" name="pass">
    <input type="submit" name="sub">
</form>    
</body>
</html>