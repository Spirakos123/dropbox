<?php
session_start();
$_SESSION['user_id']=1;

require  __DIR__ . '/../vendor/autoload.php';

$dropboxKey = 'ev6dwwkny7xdeug';
$dropboxSecret = 'uffbqggrcvyvgje';
$appName = 'My apps/vassoApp';

$appInfo = new Dropbox\AppInfo($dropboxKey,$dropboxSecret);

//Store CSRF token

$csrfTokenStore = new Dropbox\ArrayEntryStore($_SESSION,'dropbox-auth-csrf-token');

//Define auth details
$webAuth = new Dropbox\WebAuth($appInfo,$appName,'http://localhost/dropboxapi/dropbox_finish.php',$csrfTokenStore);

$db = new PDO ('mysql:host=localhost;dbname=dropbox','root','');
//User details

    $user= $db->prepare("SELECT * FROM users ");
    $user->execute(['user_id' => $_SESSION['user_id']]);
    $user = $user->fetchObject();
    var_dump($user);
