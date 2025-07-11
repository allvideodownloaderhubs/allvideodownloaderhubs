<?php

if (!isset($_POST['url']) || empty($_POST['url'])) {
    echo "<div class='alert alert-danger'>Video URL is missing.</div>";
    exit;
}

$url = $_POST['url'];
$api_url = 'https://yt-download.org/api/widget/mp3/' . urlencode($url);

$response = @file_get_contents($api_url);

if ($response === FALSE) {
    echo "<div class='alert alert-danger'>Failed to fetch download links. Please try again later.</div>";
    exit;
}

echo $response;
?>
