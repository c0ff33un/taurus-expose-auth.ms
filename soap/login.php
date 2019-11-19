<?php
    /**
     * Obtain JWT from taurus-auth-ms for a given email and password.
     *
     * @param string $email user's email.
     * @param string $password user's password.
     * @return string JSON stringified.
     */
    function login($email, $password) {
        //The url to send the POST request to
        $url = $_ENV["API_URL"] . "/graphql";

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

        echo $response;

        return $response;
    } 

    $server = new SoapServer(null, 
        array('uri' => "http://ec2-3-231-146-168.compute-1.amazonaws.com/soap/login.php/wsdl.php?wsdl"));
    
    $server->addFunction("login"); 
    $server->handle(); 
?>