<?php 
require_once 'api/facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '213962312451886',
  'app_secret' => '70fb52d0aec787611393f46117944ae4',
  'default_graph_version' => 'v2.9',
  ]);

$helper = $fb->getRedirectLoginHelper();

// $permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/fb-callback.php');

echo '<a href="' . $loginUrl . '" target="_new">Log in with Facebook!</a>';

?>