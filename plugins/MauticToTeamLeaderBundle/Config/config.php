<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

return [
    'name'        => 'Team Leader CRM',
    'description' => 'Enables integration with Mautic To Team Leader CRM.',
    'version'     => '1.0',
    'author'      => 'Mautic',
    
    'services' => [
        'events' => [
            'mautic.teamleader.formbundle.subscriber' => [
                'class'     => 'MauticPlugin\MauticToTeamLeaderBundle\EventListener\FormSubscriber',
                'arguments' => [
                    'mautic.email.model.email',
                ],
            ],
        ],
    ],
];
