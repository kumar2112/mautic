<?php


/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticToTeamLeaderBundle;
/**
 * Class FormEvents.
 *
 * Events available for FormBundle
 */
final class TeamLeaderEvents
{
/**
     * The mautic.form.on_execute_submit_action event is dispatched to excecute the form submit actions.
     *
     * The event listener receives a
     * Mautic\FormBundle\Event\SubmissionEvent
     *
     * @var string
     */
    const ON_EXECUTE_SUBMIT_ACTION = 'matuic.teamleader.on_execute_submit_action';
}