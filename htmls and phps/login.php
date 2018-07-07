<?php include "db.php";
      include "functions.php";?>
<?php 
if(isset($_POST['sub']))

{
    add();
    
}
if(isset($_POST['update']))
{
    update();
}
?>

<html>
<body>
<form action="login.php" method="post";>
    <label for="name">Username</label>
    <input type="text" name="name"><br><br>
    <label for="pass">Password</label>
    <input type="password" name="pass"><br><br>
    <input type="submit" name="sub"><br>
    <input type="submit" name="update" value="Update">
    
    <select name="id" >
    <?php 
        
        showall();
    ?>
    </select>
</form>    
</body>
</html>