<?php 
session_start();
$user=$_SESSION["username"];


include("config.php");
if(isset($_POST['submit'])){
    $file_name=$_FILES['image']['name'];
    //$file_video=$_FILES['video']['name'];
    //
    $tempname=$_FILES['image']['tmp_name'];
   $folder='images/'.$file_name;
   $user=$_SESSION["username"];
   $id=$_SESSION["id"];

  /// $query=mysqli_query($link,"INSERT INTO users (file) values ('$file_name') SELECT users,id FROM users WHERE uers ='$user' AND id='$id'");
   
  $query=mysqli_query($link,"INSERT INTO post (user,file) VALUES ('$user','$file_name')");

  
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
    <title>Welcome</title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style> a{
            text-decoration: none;
            color:black;
            font-size:25px;
        }
     .my-5{
            font-style: italic;
            font-size: 50px;
            color:black;
            margin-left:50px;
            }
            .reels{
                border:1px solid white;
                display:flex;
                gap:250px;
            color:blue;
            background-color: black;
            width: 100%;
           bottom:0%;
            border-radius: 4px;
            padding:6px;
            position:fixed;
        }
        button{font-size:1.5rem;
    border:none;
    color:white;
    background-color:black;
}.custom{
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    border-radius:50%;
}
input[type="file"] {
   display:none;
   color:white;
  
}
.plus{
    
    border-radius: 50%;
    color:white;

    font-size:2rem;
    
}
.pallu{
font-size:20px; margin:10px;
}
.g{
    margin:10px;
        font-weight: bold;
        font-size: 30px;  font-family: Georgia, 'Times New Roman', Times, serif;     
}
.imager{
    
}
    </style>



</head>
<body>
   
    <h1 class="my-5"><a href="welcome.php" class="my-5">ANIMAR</a></h1>
 
   
    
    <form method="post"  enctype="multipart/form-data">
<label class="reels">
<input type="file" name="image" ><div class="plus">+</div><span class="insta">
<button type="submit" name="submit">upload</button></label>
</form>
    <h1 class="g">Posts</h1><hr>
     <?php
     $user=$_SESSION["username"]; 
      $res=mysqli_query($link,"SELECT * FROM post");
    
      while($row=mysqli_fetch_assoc($res)){
         ?>
        
         <h1 class="pallu"><?php  echo $row["user"];?></h1>
    
         <img  class="imager" width="100%" height="350px" src="images/<?php echo $row['file'];  ?>" />
        
     <?php }?>
 
    </body>
</html><?php 
session_start();
$user=$_SESSION["username"];


include("config.php");
if(isset($_POST['submit'])){
    $file_name=$_FILES['image']['name'];
    //$file_video=$_FILES['video']['name'];
    //
    $tempname=$_FILES['image']['tmp_name'];
   $folder='images/'.$file_name;
   $user=$_SESSION["username"];
   $id=$_SESSION["id"];

  /// $query=mysqli_query($link,"INSERT INTO users (file) values ('$file_name') SELECT users,id FROM users WHERE uers ='$user' AND id='$id'");
   
  $query=mysqli_query($link,"INSERT INTO post (user,file) VALUES ('$user','$file_name')");

  
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
    <title>Welcome</title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style> a{
            text-decoration: none;
            color:black;
            font-size:25px;
        }
     .my-5{
            font-style: italic;
            font-size: 50px;
            color:black;
            margin-left:50px;
            }
            .reels{
                border:1px solid white;
                display:flex;
                gap:250px;
            color:blue;
            background-color: black;
            width: 100%;
           bottom:0%;
            border-radius: 4px;
            padding:6px;
            position:fixed;
        }
        button{font-size:1.5rem;
    border:none;
    color:white;
    background-color:black;
}.custom{
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    border-radius:50%;
}
input[type="file"] {
   display:none;
   color:white;
  
}
.plus{
    
    border-radius: 50%;
    color:white;

    font-size:2rem;
    
}
.pallu{
font-size:20px; margin:10px;
}
.g{
    margin:10px;
        font-weight: bold;
        font-size: 30px;  font-family: Georgia, 'Times New Roman', Times, serif;     
}
.imager{
    
}
    </style>



</head>
<body>
   
    <h1 class="my-5"><a href="welcome.php" class="my-5">ANIMAR</a></h1>
 
   
    
    <form method="post"  enctype="multipart/form-data">
<label class="reels">
<input type="file" name="image" ><div class="plus">+</div><span class="insta">
<button type="submit" name="submit">upload</button></label>
</form>
    <h1 class="g">Posts</h1><hr>
     <?php
     $user=$_SESSION["username"]; 
      $res=mysqli_query($link,"SELECT * FROM post");
    
      while($row=mysqli_fetch_assoc($res)){
         ?>
        
         <h1 class="pallu"><?php  echo $row["user"];?></h1>
    
         <img  class="imager" width="100%" height="350px" src="images/<?php echo $row['file'];  ?>" />
        
     <?php }?>
 
    </body>
</html><?php 
session_start();
$user=$_SESSION["username"];


include("config.php");
if(isset($_POST['submit'])){
    $file_name=$_FILES['image']['name'];
    //$file_video=$_FILES['video']['name'];
    //
    $tempname=$_FILES['image']['tmp_name'];
   $folder='images/'.$file_name;
   $user=$_SESSION["username"];
   $id=$_SESSION["id"];

  /// $query=mysqli_query($link,"INSERT INTO users (file) values ('$file_name') SELECT users,id FROM users WHERE uers ='$user' AND id='$id'");
   
  $query=mysqli_query($link,"INSERT INTO post (user,file) VALUES ('$user','$file_name')");

  
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
    <title>Welcome</title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style> a{
            text-decoration: none;
            color:black;
            font-size:25px;
        }
     .my-5{
            font-style: italic;
            font-size: 50px;
            color:black;
            margin-left:50px;
            }
            .reels{
                border:1px solid white;
                display:flex;
                gap:250px;
            color:blue;
            background-color: black;
            width: 100%;
           bottom:0%;
            border-radius: 4px;
            padding:6px;
            position:fixed;
        }
        button{font-size:1.5rem;
    border:none;
    color:white;
    background-color:black;
}.custom{
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    border-radius:50%;
}
input[type="file"] {
   display:none;
   color:white;
  
}
.plus{
    
    border-radius: 50%;
    color:white;

    font-size:2rem;
    
}
.pallu{
font-size:20px; margin:10px;
}
.g{
    margin:10px;
        font-weight: bold;
        font-size: 30px;  font-family: Georgia, 'Times New Roman', Times, serif;     
}
.imager{
    
}
    </style>



</head>
<body>
   
    <h1 class="my-5"><a href="welcome.php" class="my-5">ANIMAR</a></h1>
 
   
    
    <form method="post"  enctype="multipart/form-data">
<label class="reels">
<input type="file" name="image" ><div class="plus">+</div><span class="insta">
<button type="submit" name="submit">upload</button></label>
</form>
    <h1 class="g">Posts</h1><hr>
     <?php
     $user=$_SESSION["username"]; 
      $res=mysqli_query($link,"SELECT * FROM post");
    
      while($row=mysqli_fetch_assoc($res)){
         ?>
        
         <h1 class="pallu"><?php  echo $row["user"];?></h1>
    
         <img  class="imager" width="100%" height="350px" src="images/<?php echo $row['file'];  ?>" />
        
     <?php }?>
 
    </body>
</html><?php 
session_start();
$user=$_SESSION["username"];


include("config.php");
if(isset($_POST['submit'])){
    $file_name=$_FILES['image']['name'];
    //$file_video=$_FILES['video']['name'];
    //
    $tempname=$_FILES['image']['tmp_name'];
   $folder='images/'.$file_name;
   $user=$_SESSION["username"];
   $id=$_SESSION["id"];

  /// $query=mysqli_query($link,"INSERT INTO users (file) values ('$file_name') SELECT users,id FROM users WHERE uers ='$user' AND id='$id'");
   
  $query=mysqli_query($link,"INSERT INTO post (user,file) VALUES ('$user','$file_name')");

  
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
    <title>Welcome</title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style> a{
            text-decoration: none;
            color:black;
            font-size:25px;
        }
     .my-5{
            font-style: italic;
            font-size: 50px;
            color:black;
            margin-left:50px;
            }
            .reels{
                border:1px solid white;
                display:flex;
                gap:250px;
            color:blue;
            background-color: black;
            width: 100%;
           bottom:0%;
            border-radius: 4px;
            padding:6px;
            position:fixed;
        }
        button{font-size:1.5rem;
    border:none;
    color:white;
    background-color:black;
}.custom{
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    border-radius:50%;
}
input[type="file"] {
   display:none;
   color:white;
  
}
.plus{
    
    border-radius: 50%;
    color:white;

    font-size:2rem;
    
}
.pallu{
font-size:20px; margin:10px;
}
.g{
    margin:10px;
        font-weight: bold;
        font-size: 30px;  font-family: Georgia, 'Times New Roman', Times, serif;     
}
.imager{
    
}
    </style>



</head>
<body>
   
    <h1 class="my-5"><a href="welcome.php" class="my-5">ANIMAR</a></h1>
 
   
    
    <form method="post"  enctype="multipart/form-data">
<label class="reels">
<input type="file" name="image" ><div class="plus">+</div><span class="insta">
<button type="submit" name="submit">upload</button></label>
</form>
    <h1 class="g">Posts</h1><hr>
     <?php
     $user=$_SESSION["username"]; 
      $res=mysqli_query($link,"SELECT * FROM post");
    
      while($row=mysqli_fetch_assoc($res)){
         ?>
        
         <h1 class="pallu"><?php  echo $row["user"];?></h1>
    
         <img  class="imager" width="100%" height="350px" src="images/<?php echo $row['file'];  ?>" />
        
     <?php }?>
 
    </body>
</html>