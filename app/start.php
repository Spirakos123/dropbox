<?php

session_start();
$_SESSION['user_id']=1;

require  __DIR__ . '/../vendor/autoload.php';

use Kunnu\Dropbox\Dropbox;
use Kunnu\Dropbox\DropboxApp;



$dropboxKey = 'ev6dwwkny7xdeug';
$dropboxSecret = 'uffbqggrcvyvgje';
$token = 't9SqgUJEYLAAAAAAAAAANl9mDWEpRA8Kk_A0awrpa0-2Nu5nhibwJ4BM57VYS-Js';
$appName = 'vassoApp';



$app = new DropboxApp($dropboxKey, $dropboxSecret, $token);

$dropbox = new Dropbox($app);

//Store CSRF token

//$csrfTokenStore = new Dropbox\ArrayEntryStore($_SESSION,'dropbox-auth-csrf-token');
// $crsfTokenStore = new DropboxAuthHelper();
// $crsfTokenStore->getCsrfToken();
// print_r($crsfTokenStore);
//getCsrfToken();
//$csrfTokenStore= new Dropbox\getCsrfToken($_SESSION,'t9SqgUJEYLAAAAAAAAAAG4bI-UzGrJIvWZLozz7zb8UlmbenbJJE_9hWoJEN0v7L');

//DropboxAuthHelper
$authHelper = $dropbox->getAuthHelper();
// echo "<pre>";
// print_r($authHelper);
// echo "</pre>";

//Callback URL
$callbackUrl = "http://localhost/dropbox/dropbox_finish.php";

//Define auth details
//$webAuth = new Dropbox\WebAuth($appInfo,$appName,'http://localhost/dropboxapi/dropbox_finish.php',$csrfTokenStore);

// $db = new PDO ('mysql:host=localhost;dbname=dropbox','root','');
// //User details
//
//     $user= $db->prepare("SELECT * FROM users ");
//     $user->execute(['user_id' => $_SESSION['user_id']]);
//     $user = $user->fetchObject();
//     var_dump($user);
?>
