<?php
require_once 'api/facebook/autoload.php';
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;

// $app_id 	= '148440685646515';
// $app_secret = '8f9f169686546ca18c40d3e8fa3b1125';
$app_id 	  = '213962312451886';
$app_secret = 'f28630b20e6710ca76176acd5e0f3a39';
$app_access_token = $app_id.'|'.$app_secret;

$fb = new \Facebook\Facebook([
  'app_id' 					=> $app_id,
  'app_secret'				=> $app_secret,
  'default_graph_version' 	=> 'v2.9',
  'default_access_token' => '{access-token}' // optional
]);

// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
   $helper = $fb->getRedirectLoginHelper();
//   $helper = $fb->getJavaScriptHelper();
//   $helper = $fb->getCanvasHelper();
//   $helper = $fb->getPageTabHelper();

try {
  $accessToken = $helper->getAccessToken();
  // Get the \Facebook\GraphNodes\GraphUser object for the current user.
  // If you provided a 'default_access_token', the '{access-token}' is optional.
  $response = $fb->get('/me', $accessToken);
} catch(\Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$me = $response->getGraphUser();
echo 'Logged in as ' . $me->getName();

      // try {
      //     $fb->POST('/'.$me->getId().'/notifications?template=@['.$me->getId().'], Tem um sangue O- (O negativo) disponivel. Fique atento.&href=//localhost&ref=?asdasd&access_token='.$app_access_token);
      //     echo 'Notificação enviada com sucesso!';
      //   } catch(Exception $e) {
      //     echo $e->getMessage();
      //   }
      //   echo "<br />";

 #try {
          //$fb->POST('/'.$me->getId().'/feed?&access_token='.$accessToken.'&message=testando&link=http://www.comerciodeimovel.com.br/&picture=http://www.agrimapas.com.br/imobiliaria/app/images/layout/aboutus.jpg');
          //echo 'Postagem feita com sucesso!';
        //} catch(Exception $e) {
          //echo $e->getMessage();
        //}

#$me = $response->getGraphUser();

echo 'ID: ' . $me->getId();
echo "<br />";
#echo 'Logado como ' . $me->getName();
#echo "<br />";
#echo 'Genero ' . $me->getGender();
#echo "<br />";
#echo 'Primeiro Nome ' . $me->getFirstName();
#echo "<br />";
#echo 'Segundo Nome ' . $me->getMiddleName();
#echo "<br />";
#echo 'Terceiro Nome ' . $me->getLastName();
#echo "<br />";
#echo 'Link ' . $me->getLink();
#echo "<br />";
#echo 'Aniversário ' . $me->getBirthday();
#echo "<br />";
#echo 'Localização ' . $me->getLocation();
#echo "<br />";
#echo 'hometown ' . $me->getHometown();
#echo "<br />";
#echo 'Foto ' . $me->getPicture();
#echo "<br />";
#echo 'Email ' . $me->getEmail();
#echo "<br />";

?>