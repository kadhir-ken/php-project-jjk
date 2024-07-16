<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   <style>
        body{ font: 14px sans-serif; text-align: center; }
        a{
            text-decoration: none;
            color:black;
            font-size:25px;
        }
        .my-5{
            font-style: italic;
            font-size: 50px;
            color:green;
           margin-top:190px;
            
        }
        .head{
          
           justify-content: center;
         border:none;  
        }
        .card{
            
            
            justify-content: center;
            height:190px;
            width:100%;
            position:flex;
        
            border:none; 
            font-size:25px;
            font-family: Georgia, 'Times New Roman', Times, serif;
           
        }
        .red{
           
            justify-content: center;
            height:380px;
            width:379px;
            position:relative;
            
            padding:12px;
         
            font-size:25px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        .head2{
            border:1px solid red;
            padding:6px;
            border-radius: 6px;
           
            color:red;
        }
        .head3{
            border:1px solid red;
            padding:6px;
            border-radius: 6px;
            color:red;
        }
        .icon{
          color:white;
            font-size:3rem;
        }
        .mora{
            font-size: 42px;
            color:green;
            gap:22px;
        }
        .reels{
           position:fixed;
          width:100%;
          bottom:0%;
          background-color: black;
          color:white;
        padding:6px;
        }
        .reels2{
            color:white;
        }
        .college{
        color:white;
        left:60%;
        }
    </style>
</head>
<body>
   
    <h1 class="my-5">ANIMAR <a href="dashboard.php" ><span class="icon"><span class="mora"> &#9732;</span></a></h1>
 
 
    <div class="card" align="center"><p class="head">A website to share your thoughts on anime</p></div>
   
   


   
   
   
    <div class="fill"><footer class="reels"><a class="reels2" href="post.php">+</a><a href="video.php" class="college">kadhir</a></footer></div>
    <a href="jjk.php">     <img src="https://upload.wikimedia.org/wikipedia/en/4/46/Jujutsu_kaisen.jpg"><p>Jujutsu Kaisen</p></a>
   <a href="config.php">     <img src="https://upload.wikimedia.org/wikipedia/en/d/d6/Shingeki_no_Kyojin_manga_volume_1.jpg"><p>Jujutsu Kaisen</p></a>
      
   <a href="config.php">     <img src="https://upload.wikimedia.org/wikipedia/en/9/94/NarutoCoverTankobon1.jpg"><p>Jujutsu Kaisen</p></a>
   <a href="config.php">     <img src="https://upload.wikimedia.org/wikipedia/en/6/69/Black_Clover%2C_volume_1.jpg"><p>Jujutsu Kaisen</p></a>
   <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
    
</body>
</html>