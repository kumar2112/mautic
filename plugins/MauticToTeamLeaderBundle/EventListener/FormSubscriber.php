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
     * FormSubscriber constructor.
     *
     * @param EmailModel $emailModel
     */
    public function __construct(EmailModel $emailModel)
    {
        $this->emailModel = $emailModel;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            FormEvents::ON_EXECUTE_SUBMIT_ACTION => [
                ['onFormSubmitAction', 0],
            ],
            
        ];
    }

    /**
     * Add a lead generation action to available form submit actions.
     *
     * @param FormBuilderEvent $event
     */
    public function onFormSubmitAction(Events\SubmissionEvent $event)
    {
        $form = $event->getForm();
        $fields=$form->getFields();
        echo "fsdfdsfsd"; die();
    }

    
}
