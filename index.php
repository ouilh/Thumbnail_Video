<!DOCTYPE html>
<html>
<head>
     <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GHTE3Q53KN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GHTE3Q53KN');
</script>
<meta content=" Grab any youtube video thumbnails images and save in many sizes and quality, it's currently supported formats: YouTube (HD, SD, 1080p, 4K)" name="description">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="thumbnail extractor Download youtube thumbnail Images and vimeo videos of all quality. This app lets you to download HD thumbnail images for free. Just enter the URL of the video for which thumbnail needs to be saved. download video mp4 from youtube url of all quality">
<meta name="google-adsense-account" content="ca-pub-2979288114136410">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2979288114136410"
     crossorigin="anonymous"></script>
<link href="static/css/style.css" rel="stylesheet"/>
<script src="static/js/script.js"></script>
<?php
include("links.php");
?>

    <title>Youtube Thumbnail Extractor Image View and Download</title>
<meta name="keywords" content="thumbnail, mp4, youtube thumbnail">

</head>
<body style="background-color:#0E1117; color:white">
<?php
 include("menu.php");
 ?>
 
  



    
  <style>
      
       
  </style>
        <div class="downloader">
            
       
    <form method="POST" action="scripts/thumbnail.php" class="main">
       
       

            
       
        <p>Enter a video URL to get its thumbnail</p>
        <p>Video URL</p>
        <input style="background-color:#262730;border-color:#262730; color:white" id="videoUrlInput" type="text"class="form-control" placeholder="Video Url" aria-label="Video Url" aria-describedby="addon-wrapping" name="video_url"  required >
        <br>
        <p>Thumbnail Quality:</p>
        <select style="background-color:#262730;border-color:#262730; color:white" name="quality"class="form-select" >
            <option value="maxresdefault">HD</option>
            <option value="sddefault">SD</option>
            <option value="mqdefault">Normal Image (480x360)</option>
            <option value="hqdefault">Normal Image (320x180)</option>
            <option value="default">Normal Image (120x90)</option>
        </select>
        <img class="shadow" id="thumbnailpreview" src="images/placeholder.gif"
                onerror="this.style.display='none'" />
        <br>
        <br />
        <input type="button" id="getThumbnailBtn" class="btn btn-outline-success"value="Get Thumbnail"/>
    <div id="thumbnailContainer"></div>
    <br />
        <input id="dis" type="submit"class="btn btn-outline-success" value="Download Thumbnail">
        <br /> <br />
    </form> </div>
    
</body>
<script>


</script>
</html>
