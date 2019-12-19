<?php # HelloClient.php
# Copyright (c) 2007 HerongYang.com, All Rights Reserved.
#
   $client = new SoapClient($_ENV["CONSUME_SERVER_URL"] . "/interface/wsdl");

   $return = $client->__soapCall("createNotification", array("¯\_(ツ)_/¯ Willcommen Taurus.", 300001, 300001, 1 ));
   echo("\nReturning value of __soapCall() call: ".$return);

?>
