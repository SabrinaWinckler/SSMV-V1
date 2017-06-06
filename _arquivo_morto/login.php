<?php
session_start();
require_once 'api/facebook/autoload.php';

$fb = new \Facebook\Facebook([
  'app_id' 					=> '213962312451886',
  'app_secret'				=> 'f28630b20e6710ca76176acd5e0f3a39',
  'default_graph_version' 	=> 'v2.9',
  //'default_access_token' => '{access-token}', // optional
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'public_profile', 'user_friends']; // optional
$loginUrl = $helper->getLoginUrl('http://localhost/fb-callback.php', $permissions);

echo '<a href="' . $loginUrl . '" target="_new">Logar com o Facebook!</a>';
?>