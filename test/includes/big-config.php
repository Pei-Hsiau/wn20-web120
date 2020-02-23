
<?php
//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default


switch(THIS_PAGE){
        
    

    case 'index.php':
        $title = "BIG research";
        $logo = 'fa-home';
        $PageID = 'Welcome';
        $logo_color = ' style="color:#52B6E2"';
        $h1 = "Pearl's BIG research pages";
        
    break;
    
    case 'sitevsapp.php':
        $title = "Research 1";
        $logo = "fa-html5";
        $logo_color = ' style="color:#52B6E2"';
        $h1 = "Site vs. App";

    break;

    
    case 'galleries.php':
        $title = "Research 2";
        $logo = 'fa-camera-retro';
        $logo_color = ' style="color:#52B6E2"';
        $h1 = "Galleries";

    break;
    
    case 'flexbox.php':
        $title = "Research 3";
        $logo = 'fa-cube';
        $logo_color = ' style="color:#52B6E2"';
        $h1 = "Flexbox";
        
    break;
    
    case 'shoppingcarts.php':
        $title = "Research 4";
        $logo = 'fa-cube';
        $logo_color = ' style="color:#52B6E2"';
        $h1 = "Shopping Carts";
        
    break;
    
    case 'map.php':
        $title = "Pearl's Map";
        $logo = 'fa-map-o';
        $logo_color = ' style="color:#52B6E2"';
        $h1 = "My map";
        
    break;
        
    case 'calendar.php':
        $title = "Pearl's Calendar";
        $logo = 'fa-calendar';
        $logo_color = ' style="color:#52B6E2"';
        $h1 = "Pearl's Calendar";
        
    break;
    
    case 'youtube.php':
        $title = "Pearl's YouTube" ;
        $logo = 'fa-youtube-square';
        $logo_color = ' style="color:#52B6E2"';
        $h1 = "YouTube Clip";
        
    break;
    
    
    case 'webcam.php':
        $title = "Pearl's Webcam";
        $logo = 'fa-eye';
        $logo_color = ' style="color:#52B6E2"';
        $h1 = "Webcam";
        
    break;
    

    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default  
    
}





?>
