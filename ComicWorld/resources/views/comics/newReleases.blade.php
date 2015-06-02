<?php
/**
 * Created by PhpStorm.
 * User: bhawansingh
 * Date: 15-05-29
 * Time: 6:06 PM
 */

        $ts = time();
         $str = md5($ts.$_ENV['MARVEL_PRIVATE'].$_ENV['MARVEL_PUBLIC'] );

            $url= "http://gateway.marvel.com/v1/public/comics?dateDescriptor=thisMonth&ts=".$ts."&apikey=00231914b4f52dcf272383c62aba5708&hash=".$str;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $output = curl_exec($ch);

        // output the profile information - includes the header

        //echo($output) . PHP_EOL;

        $output = json_decode($output);
//       var_dump($output);

        foreach($output->data->results as $result){
          echo $result->title;
            echo "<img src='".$result->thumbnail->path.".".$result->thumbnail->extension."'/>";
           // var_dump($result);
        }

        // close curl resource to free up system resources

        curl_close($ch);



      ?>