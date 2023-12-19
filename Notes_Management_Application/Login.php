<?php
session_start();
$umsg="";

if($_POST['usignin'])
{
    $uname=$_POST['uname'];
    $upassword=$_POST['upassword'];
   
    //match password with datadbase.


    include 'dbconnect.php';
    $sql ="select uname from users where
    uname='$uname' and password='$upassword'";

    $result= $conn->query($sql);
    
    if($result -> num_rows > 0)
    {
        $_SESSION['uname']=$uname;
        header('Location: addNotes.php');
    }
    else{
        $umsg=$umsg."<br> Sign in Failed!";
    }
}?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Log in </title>
        <link rel="stylesheet" type ="text/css" href="style.css">
    </head>
    <body>
        <div id="header"> Header</div>
        <div id="left"><?php include 'LinkSection.php';?></div>
        <div id ="main"> <h1> Log in</h1><hr>
        <?=$umsg?>

        <form method ="post" action="Login.php">
            UserName:
            <input type="text" name="uname"><br><br>

            Password:
            <input type="text" name="upassword"><br><br>
            <input type="submit" value=" Log in" name="usignin">
       </div>
        </form>
        <div id="footer">
            <div id="Footer"> Footer</div>
    </body>
</html>
   


