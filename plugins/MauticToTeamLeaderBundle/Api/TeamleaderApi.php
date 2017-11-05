<?php

namespace MauticPlugin\MauticToTeamLeaderBundle\Api;

use Mautic\PluginBundle\Exception\ApiErrorException;

class TeamleaderdApi extends CrmApi
{
    /*
     * @ string endpoint
     * 
     */
    protected $api_url="https://app.teamleader.eu/api/";
    
    protected $integration;
    
    protected $parameters=array();
    
    public function __construct(CrmAbstractIntegration $integration){
        $this->integration = $integration;
        $tokenData = $this->integration->getKeys();
        
        $this->parameters['api_group']= $tokenData['groupkey'];
        $this->parameters['api_secret']= $tokenData['groupkey'];
    }
    
    protected function request($operation, $element='', $elementData = [], $method = 'GET'){
        $this->parameter=array_merge($this->parameters,$elementData);
        if (!empty($this->parameter)) {
            $parameters['element'] = json_encode($elementData);
        }
        $response = $this->integration->makeRequest($request_url, $parameters, $method);

        if (!empty($response['error'])) {
            $error = $response['error']['message'];

            throw new ApiErrorException($error);
        }

        return $response['result'];
    }
    
    /**
     * @param array $data
     *
     * @return mixed
     */
    public function createLead(array $data)
    {
        return $this->request('https://app.teamleader.eu/api/addContact.php','', $data, 'POST');
    }
}
