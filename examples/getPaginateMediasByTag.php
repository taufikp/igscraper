<?php
require __DIR__ . '/../vendor/autoload.php';

$instagram = \IGScraper\Instagram::withCredentials('username', 'password', '/path/to/cache/folder');
$instagram->login();

$result = $instagram->getPaginateMediasByTag('zara');
$medias = $result['medias'];

if ($result['hasNextPage'] === true) {
    $result = $instagram->getPaginateMediasByTag('zara', $result['maxId']);
    $medias = array_merge($medias, $result['medias']);
}

echo json_encode($medias);