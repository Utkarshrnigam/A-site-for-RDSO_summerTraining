<?php
include "db.php";


function query()
{   $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $que=$_POST['que'];
 
    global $connection;
    $query="insert into contactus(firstName,lastName,emailId,query)";
    $query .="values('$fname','$lname','$email','$que')";
    $result=mysqli_query($connection,$query);
}



function adduser()
{   $fname=$_POST['sf-name'];
    $lname=$_POST['sl-name'];
    $username=$_POST['username'];
    $mobileno=$_POST['mobileno'];
    $password=$_POST['password'];
 
    global $connection;
    $query="insert into user(fname,lname,username,mobileno,password)";
    $query .="values('$fname','$lname','$username','$mobileno','$password')";
    $result=mysqli_query($connection,$query);
}
    


