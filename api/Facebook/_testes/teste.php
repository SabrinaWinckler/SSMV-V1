<?php

require_once __DIR__ . '/facebook/autoload.php';
use Facebook\FacebookRequest;

$fb = new \Facebook\Facebook([
  'app_id' 					=> '148440685646515',
  'app_secret'				=> '8f9f169686546ca18c40d3e8fa3b1125',
  'default_graph_version' 	=> 'v2.8',
  //'default_access_token' => '{access-token}', // optional
]);

$request = $fb->request('GET', '/me');

// Send the request to Graph
try {
  $response = $fb->getClient()->sendRequest($request);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$graphNode = $response->getGraphNode();

echo 'User name: ' . $graphNode['name'];

?>