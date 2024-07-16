<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link href="./src/output.css" rel="stylesheet">
<style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: rgb(105, 145, 233);
    }
    #myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
height:100%;
width:100%;
}
.tmr{
    position: fixed;
}
    .bor{
        background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    
    }
    .bor:hover{
        background-color: blue;
        border:1px solid white;
        
        color:white;
    }
    p{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color:white;
       
    }
    .text{
        border-bottom: 2px solid white;
      padding-bottom: 10px;
      font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      font-size:35px;
      color:white;
    }
    .card{
        width: 300px;
      padding: 20px;
      border: 2px solid white;
      border-radius: 10px;
      text-align: center;
    }
</style>
</head>
<body>
    <video autoplay muted loop id="myVideo">
        <source src="image.mp4" type="video/mp4" >
      </video>
      <div class="tmr">  <div class="card border-slate-200" align="center">
  <h1 class="text">
  Animar
  </h1>
  <p>A platform to share your reviews for animes.</p>
  <br>
  <a href="login.php" class="bor">Explore!</a></div></div>  
</body>
</html>