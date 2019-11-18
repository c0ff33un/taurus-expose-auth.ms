<?php # HelloClient.php
# Copyright (c) 2007 HerongYang.com, All Rights Reserved.
#
   $client = new SoapClient(null, array(
      'location' => "http://localhost:8081/auth/login.php",
      'uri'      => "http://localhost:8081/auth/login.php",
      'trace'    => 1 ));

   $return = $client->__soapCall("login",array("a@a.com", "hola"));
   echo("\nReturning value of __soapCall() call: ".$return);

   echo("\nDumping request headers:\n" 
      .$client->__getLastRequestHeaders());

   echo("\nDumping request:\n".$client->__getLastRequest());

   echo("\nDumping response headers:\n"
      .$client->__getLastResponseHeaders());

   echo("\nDumping response:\n".$client->__getLastResponse());
?>