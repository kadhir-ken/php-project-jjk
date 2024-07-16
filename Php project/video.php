<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Video Player</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    
    #video-container {
        position: relative;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        overflow: hidden;
    }
    
    video {
        width: auto;
        height: 100%;
        pointer-events: none;
    }
    
    .control-button {
        position: absolute;
        top: 50%;
        background-color: transparent;
    color:transparent;
height:100%;
        transform: translateY(-50%);
    
        border: none;
        padding: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        pointer-events: auto;
    }
    
    .control-button:hover {
      
    }
    
    #prev-button {
        left: 10px;
    }
    
    #next-button {
        right: 10px;
    }
    .high{
        position:fixed;
      text-decoration: none;
  
   border-radius: 4px;
   padding:22px;
   color:white;
font-size: 1rem;
         border:1px solid white;
    bottom:0%;
    }
    .contain{
        background-color: black;
    }
</style>
</head>
<body>

<div id="video-container">
    <video id="video"   autoplay loop>
        <source src="image.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <button id="prev-button" class="control-button">&lt; Prev</button>
    <button id="next-button" class="control-button">Next &gt;</button>
   
</div ><div align="center" class="contain">
<a href="upload.php" class="high" >+</a></div>
<script>
    const video = document.getElementById('video');
    const prevButton = document.getElementById('prev-button');
    const nextButton = document.getElementById('next-button');

    const videos = [<?php
// Establish database connection (replace dbname, username, password, and hostname with your actual values)
$pdo = new PDO('mysql:host=sql203.infinityfree.com;dbname=if0_36009060_bussinessdb', 'if0_36009060', 'k4H7J1O1evijp2');

// Prepare SQL query to fetch video URLs
$sql = "SELECT url FROM videos";

// Execute SQL query
$stmt = $pdo->query($sql);

// Fetch video URLs into an array
$videoUrls = $stmt->fetchAll(PDO::FETCH_COLUMN);

// Print array values with single quotation marks and commas
echo "'" . implode("', '", $videoUrls) . "'";

// Close database connection
$pdo = null;
?>
]; // Update with your video file names
    let currentVideoIndex = 0;

    function playPauseVideo() {
        if (video.paused) {
            video.play();
        } else {
            video.pause();
        }
    }

    function loadVideo(index) {
        if (index >= 0 && index < videos.length) {
            currentVideoIndex = index;
            video.src = videos[currentVideoIndex];
            video.play();
        }
    }

    prevButton.addEventListener('click', () => {
        currentVideoIndex = (currentVideoIndex - 1 + videos.length) % videos.length;
        loadVideo(currentVideoIndex);
    });

    nextButton.addEventListener('click', () => {
        currentVideoIndex = (currentVideoIndex + 1) % videos.length;
        loadVideo(currentVideoIndex);
    });

    video.addEventListener('click', playPauseVideo);
</script>

</body>
</html>

