<?php

function load_videos($playlist_id){
    // api config 
    $api_key = 'AIzaSyAhb_1ygXa-pwuQbbbUH3UHlWW3uh6q2P8';

    try{
        $api_data = @file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=20&playlistId='.$playlist_id.'&key='.$api_key.'');
        
        if($api_data)
        $video_list = json_decode($api_data);
        else
            throw new Exception('Invalid API key or channel ID');
    }catch(Exception $e){
        echo $e -> getMessage();
    }

    return $video_list;
}

function consoleLog($msg) {
    echo '<script type="text/javascript">' .
      'console.log(' . $msg . ');</script>';
}