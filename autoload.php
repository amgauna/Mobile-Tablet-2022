<?php

/* PHP Library / Mobile Detect = http://mobiledetect.net/ */
/* https://github.com/serbanghita/Mobile-Detect/ */

// Include and instantiate the class.

require_once('mobile/MobileDetect/Mobile_Detect.php');

$detect = new Mobile_Detect;

// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
     echo "mobile device detected";
     echo "<br>";
     require_once("mobile/pagemobile.php"); 
     }      
    elseif ( $detect->isTablet() ) {
             echo "Tablet device detected";
             echo "<br>";
             require_once("tablet/pagetablet.php");
            }
    /* != sinal de diferente */
    else {  
            echo "Computer detected";
            echo "<br>";
            require_once("web/home.php");
            exit;
        }
    

foreach($userAgents as $userAgent){
 // Use the force however you want.
 
  $detect->setUserAgent($userAgent);
  $isMobile = $detect->isMobile();
  $isMobile = require_once("mobile/pagemobile.php");

  $isTablet = $detect->isTablet();
  $isTablet = require_once("tablet/pagetablet.php");

  $isWindows = $detect->isWindows();
  $isWindows = require_once("web/home.php");
  
} 


?>
