<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '781910921601-17o46s8rpa53t7t9oobv156rk0qbkqvj.apps.googleusercontent.com';
$clientSecret = 'QmJwHBdUzzzH-p61nQjo8au8';
$redirectURL = 'http://localhost/mobster/login/';

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);