
	<div class="container">
	    <h1> Instagram</h1>

	    https://api.instagram.com/oauth/authorize/?client_id=2e4637a799244a488984219bfd7401f9&redirect_uri=http://localhost:8000/instagram&response_type=code

        http://localhost:8000/instagram

        <br>


	</div>

	

<?php
$urlMedia = 'https://api.instagram.com/v1/users/self/media/recent/?access_token='
$client_id = '2e4637a799244a488984219bfd7401f9';
$client_secret = '3f700212d34f408489084666e1545e7b';

$code = $_GET["code"];


echo $_GET["code"];

function getToken () {
    $fields = array(
           'client_id'     => $client_id,
           'client_secret' => $client_secret,
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
    $result = json_decode($result);
    return $result->access_token; //your token    
}

$token = getToken();

echo "token";
echo $token;



function getInstagramFeeds($limit = 1){
        $api_url = "https://api.instagram.com/v1/users/self/media/recent/?access_token=".$token."&count=".$limit;
        $connection_c = curl_init(); // initializing
        curl_setopt( $connection_c, CURLOPT_URL, $api_url ); // API URL to connect
        curl_setopt( $connection_c, CURLOPT_RETURNTRANSFER, 1 ); // Return the result, do not print
        curl_setopt( $connection_c, CURLOPT_TIMEOUT, 20 );
        $json_return = curl_exec( $connection_c ); // Connect and get json data
        curl_close( $connection_c ); // Close connection
        $insta = json_decode( $json_return ); // Decode and return
        foreach($insta->data as $feed){
                /* Photo Type
                * thumbnail
                * low_resolution
                * standard_resolution
                */
            $items[] = array($feed->link, $feed->images->standard_resolution->url);
        }
        return $items;
    }


echo "Feed";
echo getInstagramFeeds();


?>
