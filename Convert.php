<?php

   // iphones
   $iphonesInternal = ["iPhone1,1" , "iPhone1,2" ,"iPhone2,1" , "iPhone3,1" ,"iPhone3,2" ,"iPhone3,3" ,"iPhone4,1" ,"iPhone5,1" , "iPhone5,2","iPhone5,3" ,"iPhone5,4", "iPhone6,1","iPhone6,2" , "iPhone7,1", "iPhone7,2" ];
   $iphonesDevice = ["iPhone 2G" ,"iPhone 3G" , "iPhone 3GS","iPhone 4" ,"iPhone 4" ,"iPhone 4 (CDMA)" ,"iPhone 4S" ,"iPhone 5" ,"iPhone 5 (GSM+CDMA)" ,"iPhone 5c (GSM+CDMA)" ,"iPhone 5c (UK+Europe+Asis+China)" , "iPhone 5s (GSM+CDMA)", "iPhone 5s (UK+Europe+Asis+China)","iPhone 6" ,"iPhone 6 Plus"];
  
  
    // ipods
    $ipodsInternal = ["iPod1,1" ,"iPod2,1" ,"iPod3,1" ,"iPod4,1" , "iPod5,1"];
    $ipodsDevice = ["iPod Touch (1 Gen)" , "iPod Touch (2 Gen)", "iPod Touch (3 Gen)", "iPod Touch (4 Gen)", "iPod Touch (5 Gen)"];
    

    // ipads
    $ipadsInternal = [ "iPad1,1","iPad1,2" ,"iPad2,1","iPad2,2" , "iPad2,3","iPad2,4" ,"iPad2,5" ,  "iPad2,6" , "iPad2,7", "iPad3,1", "iPad3,2","iPad3,3" ,"iPad3,4" ,"iPad3,5" ,"iPad3,6" ,"iPad4,1" ,"iPad4,2" ,"iPad4,4" ,"iPad4,5" ];
    $ipadsDevice = ["iPad" ,"iPad 3G" ,"iPad 2 (WiFi)" , "iPad 2", "iPad 2 (CDMA)","iPad 2" ,"iPad Mini (WiFi)" , "iPad Mini"  ,"iPad Mini (GSM+CDMA)" , "iPad 3 (WiFi)","iPad 3 (GSM+CDMA)" , "iPad 3", "iPad 4 (WiFi)", "iPad 4", "iPad 4 (GSM+CDMA)","iPad Air (WiFi)" , "iPad Air (GSM+CDMA)", "iPad Mini Retina (WiFi)", "iPad Mini Retina (GSM+CDMA)"];


    $internalArray = [$iphonesInternal , $ipodsInternal  ,$ipadsInternal ];
    $deviceArray = [$iphonesDevice , $ipodsDevice , $ipadsDevice];
    
    function getDeviceWithInternalCode($internalCode , $internalArray , $deviceArray) {
    
    	$code= $internalCode;
    	$code= str_replace($internalArray[0] , $deviceArray[0] , $code);
    	$code= str_replace($internalArray[1] , $deviceArray[1] , $code);
    	$code= str_replace($internalArray[2] , $deviceArray[2] , $code);
    	
    	return $code;
    
    }
    
  echo getDeviceWithInternalCode("iPhone7,1" , $internalArray , $deviceArray);  // retuen  iPhone 6
    
    
?>
