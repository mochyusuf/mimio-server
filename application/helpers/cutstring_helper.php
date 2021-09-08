<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

        function cutText($text, $length)
        {
            if(strlen($text) > $length){
                return substr($text, 0, $length)." ...";
            }
            else{
                return $text;
            }
        }

    
