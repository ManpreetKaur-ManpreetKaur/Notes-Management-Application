<?php
session_start();

if (!isset($_SESSION['uname']))
 {
    header("Location: Login.php");
    
}

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Notes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="header">Header</div>
<div id="left">
    <?php include 'LinkSection.php'; ?>
</div>
<div id="main">
    <h1>Notes</h1>
    <hr>
    
    <a href="addNotes.php" class="add">Add New Note</a>
    <ul>
        <?php
             include 'dbconnect.php';
             $userID = $_SESSION['uname']; 
            $sql = "select * from notes where userID = '$userID'";
            $result = $conn->query($sql);
            $notes = array();
            
            if ($result->num_rows > 0) 
            {   
                while ($row = $result->fetch_assoc()) {
                    $notes[] = $row;
                }
            }
        ?>
        <?php foreach ($notes as $note) { ?>
            <li><a href="ViewNotes.php?id=<?php echo $note['userID']; ?>"><?php echo $note['title']; ?></a></li>
        <?php } 
        
        $conn->close();?>
    </ul>
</div>
<div id="footer">Footer</div>
</body>
</html>