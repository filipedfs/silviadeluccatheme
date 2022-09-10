<?php

function load_videos($channel_id, $max_results){
    // api config 
    $api_key = 'AIzaSyDeNytuiXpp29udQbwjTyukRO8J-FKdtrU';
    $playlist_id = 'PLkKbqsoc9ce9uoRlEV8jZE5sGqa33PMPF';
    try{
        $api_data = @file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channel_id.'&maxResults='.$max_results.'&key='.$api_key.''); 
        
        // TODO: Fix request to bring videos from playlist
        // $api_data = @file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId='.$playlist_id.'&key='.$api_key.'');
        
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