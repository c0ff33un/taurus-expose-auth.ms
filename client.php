<?php # HelloClient.php
# Copyright (c) 2007 HerongYang.com, All Rights Reserved.
#
   $client = new SoapClient("http://54.39.98.125:4009/interface/wsdl");

   $return = $client->__soapCall("createNotification", array("¯\_(ツ)_/¯ Willcommen Taurus.", 300001, 300001, 1 ));
   echo("\nReturning value of __soapCall() call: ".$return);

?>
