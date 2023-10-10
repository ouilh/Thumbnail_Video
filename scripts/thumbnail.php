<?php
// Function to download a YouTube video thumbnail based on video URL and quality
function downloadYouTubeThumbnail($video_url, $quality) {
    $video_id = extractVideoId($video_url);
    $fileName="thumbnail.jpg";
    if ($video_id) {
        // Determine the thumbnail URL based on the selected quality
        $thumbnail_url = "http://img.youtube.com/vi/$video_id/$quality.jpg";
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment;filename=\"$fileName\"");
        header("Content-Transfer-Encoding: binary");
    
        readfile($thumbnail_url);

       
    }
}

// Function to extract the video ID from a YouTube URL
function extractVideoId($video_url) {
    $video_id = '';
    if (preg_match('/[?&]v=([a-zA-Z0-9_-]+)/', $video_url, $matches)) {
        $video_id = $matches[1];
    } elseif (preg_match('/embed\/([a-zA-Z0-9_-]+)/', $video_url, $matches)) {
        $video_id = $matches[1];
    } elseif (preg_match('/\/([a-zA-Z0-9_-]+)$/', $video_url, $matches)) {
        $video_id = $matches[1];
    }
    return $video_id;
}

// Check if the form is submitted

    $video_url = $_POST['video_url'];
    $quality = $_POST['quality'];

   

    // Download the thumbnail based on the provided URL and quality
    downloadYouTubeThumbnail($video_url, $quality);


?>