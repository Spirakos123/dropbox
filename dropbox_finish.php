<?php
//Fetch the Authorization/Login URL
require 'app/start.php';

if (isset($_GET['code']) && isset($_GET['state'])) {
    //Bad practice! No input sanitization!
    $code = $_GET['code'];
    $state = $_GET['state'];

    //Fetch the AccessToken
    $accessToken = $authHelper->getAccessToken($code, $state, $callbackUrl);
    $accessTokenStr = $accessToken->getToken();
    echo $accessTokenStr;

    // $store = $db->prepare("
    //     UPDATE users
    //     SET dropbox_token = :dropbox_token
    //     WHERE id =:user_id
    // ");
    // $store->execute([
    //   'dropbox_token'=> $accessTokenStr,
    //   'user_id' => $_SESSION['user_id']
    // ]);
    //print_r($store);
    //header('Location: index.php');

    echo "<a href='uploadFile.php'>Upload File</a>";
  
}


?>
