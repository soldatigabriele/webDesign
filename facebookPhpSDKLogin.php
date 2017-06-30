<?php
require_once 'facebookPhpSDK.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>FACEBOOK PHP</h3>

<div>FACEBOOK APIs</div>
<?php

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email','user_hometown'];
$loginUrl=$helper->getLoginUrl('http://localhost:8888/Portfolio/facebookPhpSDKCallback.php',$permissions);
echo '<a href="'.htmlspecialchars($loginUrl).'">Login with Facebook</a>';
?>
</body>
</html>

