<?php
// Initialize the session
session_start();
require_once "config.php";
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}




$username=$_SESSION["username"];


$sql = "SELECT id FROM users WHERE username= '{$username}'";


$result = $link -> query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $id =  $row["id"] ;
    }
  } else {
    echo "ERROR in database";
  }
  $sql1 = "SELECT id FROM winecellars WHERE id ='{$id}'";
  $result = $link -> query($sql1);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " .$row["id"];
    }
  } else {
    
  

  
  

    $sql = "INSERT INTO winecellars (id, CelarNumber,WineID)
    VALUES ('{$id}', 1,null)";
    
    if ($link->query($sql) === TRUE) {
      //echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $link->error;
    }
  
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <title>Winecellar</title>
    <style>
    html,
    body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100vh;
        position: fixed;
        align-items: center;
        justify-content: center;
       
        
        background-image: url(../images/wood.png);
    }
   
   .FormNew{
       position: sticky;
       background-color: red;
       width:70%;
       height:70%;

   }
    .title{
        color: darkred;
    }
    .glow-on-hover {
        width: 220px;
        height: 50px;
        top: 250px;
        border: none;
        outline: none;
        color: #fff;
        background: #111;
        align-items: center;
        justify-content: center;
        
        cursor: pointer;
        position: relative;
        z-index: 0;
        border-radius: 10px;
    }
    
    .glow-on-hover:before {
        content: '';
        background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
        position: absolute;
        top: -2px;
        left:-2px;
        background-size: 400%;
        z-index: -1;
        filter: blur(5px);
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        animation: glowing 20s linear infinite;
        opacity: 0;
        transition: opacity .3s ease-in-out;
        border-radius: 10px;
    }
    
    .glow-on-hover:active {
        color: #000
    }
    
    .glow-on-hover:active:after {
        background: transparent;
    }
    
    .glow-on-hover:hover:before {
        opacity: 1;
    }
    
    .glow-on-hover:after {
        z-index: -1;
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: #111;
        left: 0;
        top: 0;
        border-radius: 10px;
    }
    
    @keyframes glowing {
        0% { background-position: 0 0; }
        50% { background-position: 400% 0; }
        100% { background-position: 0 0; }
    }

</style>
</head>
<body>
<center> 
 <div class = "title">
    <h1>Winecellar of  <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
</div>
</center>
<!--
<div class="FormNew">


</div>
  -->

</body

<body>
   
</br>
<div>
<center>
    <button class="glow-on-hover" type="button">NO WINECELLARS? KLICK ME!</button>
  
  </center>
  </div>


</body>
</html>


