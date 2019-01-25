<?php

//$code = $_GET['code'];
// check whether the user has granted access
/*
if (isset($code)) {
    // receive OAuth token object
    $data = $instagram->getOAuthToken($code);
    $username = $data->user->username;
    // store user access token
    $instagram->setAccessToken($data);
    // now you have access to all authenticated user methods
    $result = $instagram->getUserMedia();
} else {
    // check whether an error occurred
    if (isset($_GET['error'])) {
        echo 'An error occurred: ' . $_GET['error_description'];
    }
}
*/


$urlCode = "https://api.instagram.com/oauth/authorize/?client_id=2e4637a799244a488984219bfd7401f9&redirect_uri=http://localhost:8000/instagram&response_type=code";
$urlToken = 'https://api.instagram.com/oauth/access_token';
$urlMedia = 'https://api.instagram.com/v1/users/self/media/recent/?access_token=';
$client_id = '2e4637a799244a488984219bfd7401f9';
$client_secret = '3f700212d34f408489084666e1545e7b';




function getCode ($fields) {

    $url = 'https://api.instagram.com/oauth/authorize/?client_id=2e4637a799244a488984219bfd7401f9&redirect_uri=http://localhost:8000/instagram&response_type=code';
//    $url = 'https://api.instagram.com/oauth/authorize';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_setopt($ch,CURLOPT_POST,false); 
//    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

    $result = curl_exec($ch);
        var_dump($result);
    curl_close($ch);

//    $result = json_decode($result);
    return $result;
}

    $fields = array(
           'client_secret' => $client_secret,
           'redirect_uri'  => 'http://localhost:8000/instagram',
           'response_type' => 'code'
    );

   
//$code = getCode($fields); 
//echo "Code";

//$code2 = json_decode($code2);
//print_r($code);
//echo "Code json";
//echo $code2;

function getToken ($id,$secret,$url2,$code) {
    $fields = array(
           'client_id'     => $id,
           'client_secret' => $secret,
           'grant_type'    => 'authorization_code',
           'redirect_uri'  => 'http://localhost:8000/instagram',
           'code'          => $code
    );
    $url = 'https://api.instagram.com/oauth/access_token';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_setopt($ch,CURLOPT_POST,true); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    $result = curl_exec($ch);
    curl_close($ch);
    var_dump($result);
    $result = json_decode($result);
    return $result->access_token;

//    $result = json_decode($result);
//    return $result->access_token; //your token    
}

$code = '646dab4aac3d41eb88cae7c12aa15db4';

//$token = getToken($client_id,$client_secret,"!!",$code );

//echo "token";
//echo $token;




function getInstagramFeeds($tk){
        $limit = 4;
        $items = [];

        $api_url = "https://api.instagram.com/v1/users/self/media/recent/?access_token=".$tk."&count=".$limit;
        $connection_c = curl_init(); // initializing
        curl_setopt( $connection_c, CURLOPT_URL, $api_url ); // API URL to connect
        curl_setopt( $connection_c, CURLOPT_RETURNTRANSFER, 1 ); // Return the result, do not print
        curl_setopt( $connection_c, CURLOPT_TIMEOUT, 20 );
        $json_return = curl_exec( $connection_c ); // Connect and get json data
        curl_close( $connection_c ); // Close connection

        $insta = json_decode( $json_return ); // Decode and return
        
        foreach($insta->data as $feed){

            $items[] = array($feed->link, $feed->images->standard_resolution->url);
        }

        return $items;

//        return $insta;
    }


$token = '1131213721.2e4637a.0cc121304a1f46c5a65ec1ad3b4045ef';

$imgs= getInstagramFeeds($token);

echo "Feed1";
echo "<img src=".$imgs[0][1].">";


echo "Feed2";
echo "<pre>";
echo print_r($imgs);
echo "</pre>";

?>
