<?php
session_start();
if(! isset($_SESSION['AdminLoginId']))
{
    header("location:Login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Sahachalak Dashboard</title>
</head>
<body>
    <div class="mainall">
     <div class="leftdash">
          <img src="Images/image 1.png" alt="Logo" class="logoimg">
            <div class="userinfo">
                <div class="photo">
                    <img src="Images/profilepic.jpg" class="profilepic">
                </div>
                <h1><?php echo $_SESSION['AdminLoginId'] ?></h1>
                <form method="POST">
                <button class="logout" name="logout">Logout</button>
                </form>    
            </div>
     </div> 

     <div class="rightdash">
            <div class="searchbar">
                <form action="search.php" method="POST">
                 <input type="text" placeholder="Enter ticket number" id="inpTickNum" name="TicketId">
                 <button type="submit">Search</button>
                </form>
            </div>
     </div>
    </div>
    
    <?php
    require("connection.php");
  
    if(isset($_POST['logout'])==1)
    {
        session_destroy();
        header("location:Login.php");
    }
    ?>
</body>
<script src="ticketinfo.js"></script>
</html>