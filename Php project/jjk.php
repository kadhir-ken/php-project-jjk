
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

       include_once 'config.php';
      
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
       if(isset($_POST['comment'])){

        $comment = $_POST['comment'];
    
    }
           
           $username=$_SESSION["username"];
           if(isset($_POST['comment'])){
            if(strlen($comment)>0){
            $sql2="INSERT INTO comment (uers,comment) VALUES ('$username','$comment')";
            mysqli_query($link,$sql2);
    
 }
           }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style> .my-5{
        text-align: center;
            font-style: italic;
            font-size: 50px;
            color:green;
            
        }
        .mod{
           font-size:20px;
           font-family: Georgia, 'Times New Roman', Times, serif;
           margin-left: 40px;
        }
        .pallu{
            font-size:22px;
           font-family: Times New Roman, Times, serif;
           font-weight: bold; 
           margin:10px;
        }
        .jjk{
            text-align: center;
          font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 25px;
       
       
       }
       .det{
        align-items: center;
     justify-content:center;
    
          font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 20px;
       
    margin:20px;
       }
       .dustpin{
        margin:6px;
        height:35px;
        border:none;
        color:black;
       }
       .id{
        display:flex;
        margin:15px;
       }
       .input{
       border:1px solid green;
       padding:6px;
       border-radius: 8px;
       width:70%;
       font-family: Verdana, Geneva, Tahoma, sans-serif;
      
       }
       .potta{
        margin:10px;
        font-weight: bold;
        font-size: 20px;  font-family: Georgia, 'Times New Roman', Times, serif;     }
       .kadhir{
    text-decoration: none;
}
       .input2{
        border:1px solid green;
       padding:6px;
       border-radius: 8px;
       width:30%;
     
       font-family: Verdana, Geneva, Tahoma, sans-serif;
       }</style>
</head>
<body>  
<a href="welcome.php" class="kadhir"><h1 class="my-5">ANIMAR</h1></a><div align="center">  <img src="https://upload.wikimedia.org/wikipedia/en/4/46/Jujutsu_kaisen.jpg" ></div><p class="jjk">Jujutsu Kaisen</p>
<p class="det">Yuji Itadori, a kind-hearted teenager, joins his school's Occult Club for fun, but discovers that 
its members are actual sorcerers who can manipulate the energy between beings for
 their own use. 
    </p>
<form method="post" action="jjk.php">
    <div class="id">
<input class="input" type="text" name="comment" placeholder="comment">    
<input class="input2" type="submit" name="submit" value="Submit">
    </div></form>
</body><h1 class="potta">Comments</h1><hr>
<?php
include_once 'config.php';
        $sql = "SELECT uers,comment,id FROM comment ORDER BY id DESC";
        $result = $link->query($sql);
        // output data of each row
        while($row = $result->fetch_assoc()) {   
    ?><h1 class="pallu"><?php echo $row["uers"];?></h1>
    <?php  if(isset($_POST['dustpin'])){
     //   $sql7=mysqli_query($link,"SELECT id from comment ");
     //   $id= $row["id"];
     /// echo $row["id"];
         // $sql7=mysqli_query($link,'SELECT id from comment');
        /// $basicsql="SELECT file from users ";
         $result1 =mysqli_query($link,$basicsql);
        $id=$_POST['id'];
     $sql5="Delete  FROM comment WHERE id='$id'" ;
    
      mysqli_query($link,$sql5);}
    
    
    
 
    ?>
     <h></h>
    <p class="mod"><?php echo $row["comment"];?></p>
    
   

 





</form>
    <?php
    
   // $sql3="DELETE uers,comment FROM comment WHERE uer=''";
   
 // 
   ?>
    <?php
            
}

            
?>
</html>
