<?php
namespace Microsoft\Graph\Test;

use Microsoft\Graph\Graph;
include_once("TestConstants.php");

class GraphTestBase
{
    private $clientId;
    private $username;
    private $password;
    private $contentType = "application/x-www-form-urlencoded";
    private $grantType = "password";
    private $endpoint = "https://login.microsoftonline.com/common/oauth2/token";
    private $resource = "https%3A%2F%2Fgraph.microsoft.com%2F";
    public $graphClient;

    public function __construct()
    {
        $this->clientId     = CLIENT_ID;
        $this->username     = USERNAME;
        $this->password     = PASSWORD;

        $this->getAuthenticatedClient();
    }

    public function getAuthenticatedClient()
    {
        if ($this->graphClient == null) 
        {
            $this->graphClient = new Graph();
            $this->graphClient->setAccessToken($this->getAccessToken());
        }
    }

    public function getAccessToken()
    {
        $body = "grant_type=".$this->grantType
                ."&resource=".$this->resource
                ."&client_id=".$this->clientId
                ."&username=".$this->username
                ."&password=".$this->password;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->endpoint);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_FAILONERROR, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($this->contentType, 'Content-Length: ' . strlen($body)));

        $result = curl_exec ($ch);
        $token = json_decode($result, true)['access_token'];
        curl_close($ch);

        return $token;
    }

}
