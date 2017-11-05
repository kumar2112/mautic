<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticToTeamLeaderBundle\EventListener;

use Mautic\CoreBundle\EventListener\CommonSubscriber;
use Mautic\EmailBundle\Model\EmailModel;
use Mautic\FormBundle\Event\FormBuilderEvent;
use Mautic\FormBundle\Event\SubmissionEvent;
use Mautic\FormBundle\FormEvents;
use Mautic\LeadBundle\LeadEvents;
use Mautic\PluginBundle\PluginEvents;
use Mautic\PluginBundle\Helper\IntegrationHelper;

/**
 * Class FormSubscriber.
 */
class FormSubscriber extends CommonSubscriber
{
    /**
     * @var EmailModel
     */
    protected $emailModel;
    
    /**
     * @var EmailModel
     */
    protected $integrationHelper;

    /**
     * FormSubscriber constructor.
     *
     * @param EmailModel $emailModel
     */
    public function __construct(EmailModel $emailModel,IntegrationHelper $integrationHelper)
    {
        $this->emailModel = $emailModel;
        $this->integrationHelper=$integrationHelper;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            PluginEvents::ON_FORM_SUBMIT_ACTION_TRIGGERED => ['onFormSubmitActionTriggered', 0],
            
        ];
    }

    /**
     * Add a lead generation action to available form submit actions.
     *
     * @param FormBuilderEvent $event
     */
    public function onFormSubmitActionTriggered(SubmissionEvent $event)
    {
        //print_r($event);die();
        $config = $event->getActionConfig();
        $integration=$config['integration'];;
        $service=$this->integrationHelper->getIntegrationObject($integration);
        
        $fields = array(  
	"forename"=>"Kumar",
	"surname"=>"Praveen"
        );

        $service->createLead($fields);
        //$lead   = $event->getLead();

        //$this->pushToIntegration($config, $lead);
    }

    
}
