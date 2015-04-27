<?php 
// require 'vendor/autoload.php';

session_start();
require_once( 'Facebook/FacebookSession.php' );
require_once( 'Facebook/FacebookRedirectLoginHelper.php' );
require_once( 'Facebook/FacebookRequest.php' );
require_once( 'Facebook/FacebookResponse.php' );
require_once( 'Facebook/FacebookSDKException.php' );
require_once( 'Facebook/FacebookRequestException.php' );
require_once( 'Facebook/FacebookAuthorizationException.php' );
require_once( 'Facebook/GraphObject.php' );
require_once( 'Facebook/FacebookCurl.php' );
require_once( 'Facebook/FacebookHttpable.php' );
require_once( 'Facebook/FacebookCurlHttpClient.php' );

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;

FacebookSession::setDefaultApplication('1599302546978739','6f1177d54440d28e4c3c94b56f3f57ef');


// $session = new FacebookSession($token);
$session = FacebookSession::newAppSession();

  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/242331249286853/posts?fields=message,id&limit=4' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject()->asArray();

 $dataReturned = $graphObject[data];


// print_r ($dataReturned);


for($i = 0; $i < sizeof($dataReturned); $i++){
	if(!empty($dataReturned[$i]->message)){
	$formattedDate = date("F d, Y", strtotime($dataReturned[$i]->created_time));
	echo "<div class=\"news--post\" data-columns=\"16\">";
	echo "<span class=\"news--post__time\">".$formattedDate."</span><br/>";
	echo "<p class=\"news--post__message\">".$dataReturned[$i]->message."</p>";
	echo "</a>";
	}
}

?>
