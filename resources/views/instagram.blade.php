<?php

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

echo json_encode($imgs);

?>
