<?php


/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticToTeamLeaderBundle\Integration;

use Mautic\PluginBundle\Integration\AbstractIntegration;

/**
 * Class TeamLeadIntegration.
 */
class TeamleaderIntegration extends AbstractIntegration
{
    /**
     * @var bool
     */
    protected $coreIntegration = true;
/**
     * @return array
     */
    public function getSupportedFeatures()
    {
        return ['push_lead'];
    }
    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getName()
    {
        return 'Teamleader';
    }

    public function getDisplayName()
    {
        return 'TeamLeader';
    }
    public function getIcon()
    {
        return 'plugins/MauticToTeamLeaderBundle/Assets/img/teamleader.jpg';
    }
    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getAuthenticationType()
    {
        return 'none';
    }
    public function getRequiredKeyFields()
    {
        return [
            'groupkey'       => 'mautic.teamleader.form.groupkey',
            'secretekey'  => 'mautic.teamleader.form.secretekey',
            
        ];
    }

    /**
     * @return string
     */
    public function getGroupKey()
    {
        return 'groupkey';
    }

    /**
     * @return string
     */
    public function getClientSecretKey()
    {
        return 'secretekey';
    }
    /**
     * @return array
     */
    public function getFormSettings()
    {
        return [
            'requires_callback'      => false,
            'requires_authorization' => false,
        ];
    }
    
    /**
     * @param array $data
     *
     * @return mixed
     */
    public function createLead(array $data)
    {
        //$form = $event->getForm();
        //$fields=$form->getFields();
        $url = "https://app.teamleader.eu/api/addContact.php";

        // $fields contains all the fields that will be POSTed
        $fields = array( 
        "api_group"=>"77789",
        "api_secret"=>"AkfXUyS8WDkd7yQk1DRoa09sLv5x2XAt8FgS3YQQs0TqoABg3iu39umKQi8I6y2449MYYsEgjowyOXEI6ZC5kPG0XEzT3rNYrqMfIglSvIgawKItAapKQVADq0nki18zhKEQRQycpEcLfL5FMkfs5GWmw9wF0u474zNMfcOvGR7Lt2h5cmo8Takg9GL00GYV5CxbEcwb",
        "forename"=>"Harish",
        "surname"=>"Salve",
        "email"=>"kr.pkumar22@gmail.com" 

        );

        // Make the POST request using Curl
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, true); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

        // Decode and display the output
        $api_output = curl_exec($ch);
        $json_output = json_decode($api_output);
        $output = $json_output?$json_output:$api_output;

        // Clean up
        curl_close($ch);
    }
}
