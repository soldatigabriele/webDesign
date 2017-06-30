<?php

require_once 'facebookPhpSDK.php';

$helper = $fb->getRedirectLoginHelper();
try{
    $accessToken = $helper->getAccessToken();
}catch(Facebook\Exceptions\FacebookResponseException $e){
    echo 'Graph returned an error'.$e->getMessage();
    exit;
}catch(Facebook\Exceptions\FacebookSDKException $e){
    echo 'SDK returned an error'.$e->getMessage();
    exit;
}

if (isset($accessToken)) {
    // Logged in!
    $_SESSION['facebook_access_token'] = (string) $accessToken;

    // Now you can redirect to another page and use the
    // access token from $_SESSION['facebook_access_token']
} elseif ($helper->getError()) {
    // The user denied the request
    exit;
}

if(!isset($accessToken)){
    if($helper->getError()){
        header('HTTP/1.0 401 Unauthorized');
        echo '401';
    }else{
        header('HTTP/1.0 400 Bad Request');
        echo '400';
    }
    exit;
}
//echo '<h3>Access Token</h3>';
//echo '<pre>';
//var_dump($accessToken->getValue());
//echo '</pre>';
$oAuth2Client = $fb->getOAuth2Client();
$tokenMetadata = $oAuth2Client->debugToken($accessToken);
echo '<h3>Metadata</h3>';
echo '<pre>';
var_dump($tokenMetadata);
echo '</pre>';

try{
    $response = $fb->get('/me?fields=id,name,age_range,gender,hometown,email',$accessToken);
}catch(Facebook\Exceptions\FacebookSDKException $e){
    echo 'errore';
}

$user = $response->getGraphUser();
echo 'Welcome '.$user["name"];
echo '<br>your email is: '.$user["email"];
echo '<br>your age is: '.$user["age_range"];
echo '<br>your gender is: '.$user["gender"];

echo '<br>your gender is: '.$user["hometown"];

