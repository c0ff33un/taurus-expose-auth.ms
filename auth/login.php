<?php
    function login($email, $password) {
        //The url to send the POST request to
        $url = "http://ec2-3-231-146-168.compute-1.amazonaws.com/graphql";

        $data = [
            'query' => "mutation {login(user:{email:\"" . $email . "\" password:\"" . $password . "\"}){user{id handle email guest} jwt}}"
        ];
        $fields_string = http_build_query($data);

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        
        //execute post
        $response = curl_exec($ch);

        return $response;
    } 

    $server = new SoapServer(null, 
        array('uri' => "http://ec2-3-231-146-168.compute-1.amazonaws.com/auth/soap.php"));
    
    $server->addFunction("login"); 
    $server->handle(); 
?>