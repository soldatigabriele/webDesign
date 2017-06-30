<?php

class Flickr{
    var $fileContents;
    public function __construct(){

        //connect to Flickr
        // set the request
        $url = 'https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key='.KEY.'&photoset_id=72157649334420578&format=php_serial';
        $ch = curl_init();
        $timeout = 0; // set to zero for no timeout
        curl_setopt ($ch, CURLOPT_URL, $url);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $file_contents = curl_exec($ch);
        curl_close($ch);
        $this->fileContents = $file_contents;
    }
    public function getImage(){
//      retrieve the results
        $results = unserialize($this->fileContents);

        foreach ($results['photoset']['photo'] as $photo){
            $id = $photo['id'];
            $farm = $photo['farm'];
            $server = $photo['server'];
            $secret = $photo['secret'];
            $img = "http://farm$farm.static.flickr.com/$server/$id" . "_" . $secret . "_m.jpg";
//         create an array with the image urls
            $imgArray[] = $img;
        }
//        print the images
        for($i=1;$i<=18;$i++) {
            echo '<li><a href="#"><img src="'.$imgArray[$i].'"/></a></li>';
        }

    }
}
