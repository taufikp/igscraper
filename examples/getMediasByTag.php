<?php
require __DIR__ . '/../vendor/autoload.php';

/**
 * Example with credentials
 * 
 */
//$instagram = \IGScraper\Instagram::withCredentials('username', 'password', '/path/to/cache/folder');
//$instagram->login();

/**
 * Example without credentials
 * 
 */
$instagram = new \IGScraper\Instagram();

$medias = $instagram->getMediasByTag('marvel', 20);
$media = $medias[0];
echo "MEDIA INFO:\n";
echo "Id: {$media->getId()}\n";
echo "Shortcode: {$media->getShortCode()}\n";
echo "Created at: {$media->getCreatedTime()}\n";
echo "Caption: {$media->getCaption()}\n";
echo "Number of comments: {$media->getCommentsCount()}\n";
echo "Number of likes: {$media->getLikesCount()}\n";
echo "Get link: {$media->getLink()}\n";
echo "High resolution image: {$media->getImageHighResolutionUrl()}\n";
echo "Media type (video or image): {$media->getType()}\n";
$account = $media->getOwner();
echo "Account info:\n";
echo "Id: {$account->getId()}\n";
echo "Username: {$account->getUsername()}\n";
echo "Full name: {$account->getFullName()}\n";
echo "Profile pic url: {$account->getProfilePicUrl()}\n";
