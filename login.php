<?php
require_once 'app/start.php';

//Fetch the Authorization/Login URL
$authUrl = $authHelper->getAuthUrl($callbackUrl);
print_r($authUrl);
echo "<a href='" . $authUrl . "'>Log in with Dropbox</a>";
?>
