
<?php
header('Content-Type: application/json');

if (!isset($_POST['url'])) {
    echo json_encode(['success' => false, 'error' => 'URL is missing']);
    exit;
}

$url = $_POST['url'];
$api_url = 'https://yt-download.org/api/widget/mp3/' . urlencode($url);

$response = @file_get_contents($api_url);
if ($response === FALSE) {
    echo json_encode(['success' => false, 'error' => 'Failed to fetch video info']);
    exit;
}

echo json_encode(['success' => true, 'html' => $response]);
?>
