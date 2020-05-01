<?php
/* Example to get access token. */
require_once('aimee.instagram.class.php');
$ig = new Instagram($client_id="275442006825454", $client_secret="7ca5e04a825d3d78f408f24a67c30aee ", $redirect_uri="https://www.1touch-dev.com/");
$url = $ig->getLoginURL();

//print_r($_GET);die;

if (isset($_GET['code'])) {
    $code = $_GET['code'];
    // posts the code to Instagram and returns the access token from IG
    $token = $ig->getOAuthToken($code);
	  // Copy and paste or store this token in a database so you can do setAccessToken() in bot.php
    echo 'Access token: . ' . $token . ' (copy and paste or store this in a database).';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Access Token Example</title>

    </head>
    <body>
      <p><a href="<?php echo $url; ?>">Authentication link.</a></p>
    </body>
</html>


