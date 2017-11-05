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
        
    }
}
