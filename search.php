<?php
session_start();
if(! isset($_SESSION['AdminLoginId']))
{
    header("location:Login.php");
}

?>
<?php
    require("connection.php");
    if(!isset($_POST['TicketId']))
    {
      echo '<script>alert("No ticket id entered")</script>';
      header("location:dashboard.php");
    }
  $tickNum= $_POST['TicketId'];
  $query="SELECT * FROM `ticket` WHERE `Ticketnumber`='$tickNum' ";
  $result=mysqli_query($conn,$query);
  if(mysqli_num_rows($result)==1)
  {
    $row = mysqli_fetch_assoc($result);
  }
  else
  {
    echo '<script>alert("No ticket Found")</script>';
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
            <div id="ticketcard">
                 <h1>Ticket</h1>
                <h2>Ticket Number:<span id="ticketNumber"><?php echo $row['Ticketnumber']?></span> </h2>
                <h2>Name: <span id="fName"><?php echo $row['Fname']?></span></h2>
                <h2>Origin: <span id="origin"><?php echo $row['Origin']?></span></h2>
                <h2>Destination:<span id="destin"><?php echo $row['Destination']?></span> </h2>
                <h2>Total Fare: <span id="fare"><?php echo $row['Fare']?></span></h2>
                <button id="markButton"  onclick="expire()">Mark as expired</button>
                <h2 id="statusTick"></h2>
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
<script>
  var ticketNumber= document.querySelector('#ticketNumber'),
fName=document.querySelector('#fName'),
origin=document.querySelector('#origin'),
destin=document.querySelector('#destin'),
fare=document.querySelector('#fare'),
ticketcard=document.querySelector('#ticketcard'),
inptickNum=document.querySelector('#inpTickNum'),
markButton=document.querySelector('#markButton'),
statusTick=document.querySelector('#statusTick');
  if($row['Status']=="Expired")
        {
          ticketcard.style.display="block";
          markButton.style.display="none";
          statusTick.innerHTML="The ticket has Expired already";
          statusTick.style.color='red';
        }
        else{
          
          markButton.style.display="block";
          ticketcard.style.display="block";
          statusTick.style.display="none";
          
        }
</script>

