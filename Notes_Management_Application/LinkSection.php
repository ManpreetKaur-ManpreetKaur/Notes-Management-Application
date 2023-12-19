<h3> <?=$_SESSION['uname'];
?></h3>
<?php if(!isset($_SESSION['uname']))
{
?>
<a href="Login.php" class="Link">Log in</a><br>
<a href="signup.php" class="Link">Sign up</a><br>
<?php
}
else{
?>
<a href="Notes.php" class="Link"> Secure Notes</a> <br>
<a href="ViewNotes.php" class="Link"> View Notes</a> <br>
<a href="addNotes.php" class="Link"> Add Notes</a> <br>
<a href="signout.php" class="Link">Log out </a> <br>

<?php 
}
?>