<?php # HelloClient.php
# Copyright (c) 2007 HerongYang.com, All Rights Reserved.
#
   $client = new SoapClient(null, array(
      'location' => "http://ec2-3-231-146-168.compute-1.amazonaws.com/soap/login.php",
      'uri'      => "http://ec2-3-231-146-168.compute-1.amazonaws.com/soap/login.php",
      'trace'    => 1 ));

   $return = $client->__soapCall("login",array("jonathan.carrillo98@hotmail.com", "Codeforces")); //email & password
   echo("\nReturning value of __soapCall() call: ".$return);

   echo("\nDumping request headers:\n" 
      .$client->__getLastRequestHeaders());

   echo("\nDumping request:\n".$client->__getLastRequest());

   echo("\nDumping response headers:\n"
      .$client->__getLastResponseHeaders());

   echo("\nDumping response:\n".$client->__getLastResponse());
?>
