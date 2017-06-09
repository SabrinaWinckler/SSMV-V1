<?php
session_start();
require_once __DIR__ . '/facebook/autoload.php';

$fb = new \Facebook\Facebook([
  'app_id' 					=> '148440685646515',
  'app_secret'				=> '8f9f169686546ca18c40d3e8fa3b1125',
  'default_graph_version' 	=> 'v2.9',
  //'default_access_token' => '{access-token}', // optional
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes', 'public_profile', 'user_friends']; // optional
$loginUrl = $helper->getLoginUrl('http://192.168.1.107/imobiliaria/$.OLD/API/callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Logar com o Facebook!</a>';
?>