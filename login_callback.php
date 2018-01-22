<?php
//Fetch the Authorization/Login URL
require 'app/start.php';
if (isset($_GET['code']) && isset($_GET['state'])) {
    //Bad practice! No input sanitization!
    $code = $_GET['code'];
    $state = $_GET['state'];

    //Fetch the AccessToken
    $accessToken = $authHelper->getAccessToken($code, $state, $callbackUrl);

    echo $accessToken->getToken();
}


?>
