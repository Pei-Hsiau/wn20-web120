
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
        $title = "Pearl's WEB120 Portal Website";
        $logo = 'fa-home';
        $PageID = 'Welcome';
        $h1 = "Pearl's WEB120 Portal Website";
        
    break;
    
    case 'aia.php':
    $title = "Pearl's AIA PAge";
    $logo = "fa-universal-access";
    $logo_color = ' style="color:#52B6E2"';
    $h1 = "Pearl's Final Project Audience, Issues and Approach Research";

    break;

    
    case 'contactme.php':
        $title = "Pearl's WEB120 Contact Page";
        $logo = 'fa-paper-plane-o';
        $logo_color = ' style="color:#52B6E2"';
        $h1 = "Contact Pearl";

    break;
    
    case 'flowchart.php':
        $title = "Pearl's Flowchart Page";
        $logo = 'fa-paper-plane-o';
        $logo_color = ' style="color:#52B6E2"';
        $h1 = "Flowchart";
        
    break;

    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default  
    
}

$nav1['index.php'] = "Welcome";
$nav1['test/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Pearl";

/* 
Creating a function to generate links and apply the class=selected to currently called page

      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sara</a></li>
*/

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    
    return $myReturn;
}

?>

















