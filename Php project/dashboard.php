<?php 
session_start();




 









include("config.php");
if(isset($_POST['submit'])){
    $file_name=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
   $folder='images/'.$file_name;
   $user=$_SESSION["username"];
   $id=$_SESSION["id"];

  /// $query=mysqli_query($link,"INSERT INTO users (file) values ('$file_name') SELECT users,id FROM users WHERE uers ='$user' AND id='$id'");
   
  $query=mysqli_query($link,"UPDATE  users SET file ='$file_name' WHERE users ='$user' AND id='$id'");

  
  if(move_uploaded_file($tempname,$folder)){
       echo "<h2 class='mn'></h2>";
   }else{
       echo "<h2 class='mn'>please select an image</h2> ";}
   } 
   
   ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mn{
            
        }
.imager{
    display: inline-block; position: relative; 
    width: 200px; height: 200px; overflow: hidden; border-radius: 50%;

    margin-left: 20px;
}
.imager img{
    margin:200px;
    width: auto; height: 100%; margin-left: 450px;
}
body{
    
}
.my-5{
        text-align: center;
            font-style: italic;
            font-size: 50px;
            color:green;
            
        }
        .main{
            background-color:green;
            width:280px;margin-left:20px;
            color:white;
            font-family:papyrus;
            font-style: italic;
            border-radius:4px;
            padding:4px;
        }
        input[type="file"] {
   display:none;
}
button{
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
 background-color: white;
 font-family:lucida console;
 background-color: green;
    border-radius:10%;
    color:white;
}

.custom{
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    border-radius:50%;
}
.kadhir{
    text-decoration: none;
}
.username{
  
            width:280px;
            margin-left:20px;
            color:green;
            font-family:papyrus;
            background-color:white;
            border:green;
            border-radius:4px;
            padding:4px;
}
        </style>
</head>
<body>

<a href="welcome.php" class="kadhir"><h1 class="my-5">ANIMAR</h1></a><div align="center">
    <div>
       <?php
       $user=$_SESSION["username"]; 
        $res=mysqli_query($link,"SELECT file from users WHERE users='$user'");
      
        while($row=mysqli_fetch_assoc($res)){
           ?>
       <img  class="imager"  src="images/<?php echo $row['file'];  ?>" />
       <form method="post"  enctype="multipart/form-data">
<label class="custom">
<input type="file" name="image" >+</label>
<button type="submit" name="submit">upload</button>
</form>
       <?php echo "<h2 class='main'>Welcome to ANIMAR<h2 class='username'> $user</h2></h2>";}?> 
       
</div>
</body>
</html>