<?php

declare(strict_types=1);

use RicardoKovalski\Examples\RealWorld\MessageEmailBuilder;
use RicardoKovalski\Examples\RealWorld\PayloadBuilder;

require __DIR__ . '/../../vendor/autoload.php';

$messageEmailBuilder = new MessageEmailBuilder();
$messageEmailBuilder->withSubject('Subject for E-mail')
    ->withFromEmail('contact@gmail.com')
    ->withFromName('Company name')
    ->withFromId(1)
    ->withFromAccountId(1)
    ->withTo([
        [
            'type' => 'to',
            'email' => 'recipient1@gmail.com',
            'name' => 'recipient1',
        ]
    ])
    ->withTrackOpens(true)
    ->withTrackClick(true)
    ->withTags(['lorem','ipsum'])
    ->withGlobalMergeVars([
        'lorem' => 'ipsum'
    ]);

$payloadBuilder = new PayloadBuilder();
$payloadBuilder->withFlowIdentifier('flow-identifier')
    ->withTemplateName('template-email')
    ->withMessage($messageEmailBuilder->build());

$payload = $payloadBuilder->build();

var_dump(json_encode($payload->toArray()));

/*
{
    "service": "service",
    "template_name": "template-email",
    "flow_identifier": "flow-identifier",
    "message": {
    "subject": "Subject for E-mail",
        "from_email": "contact@gmail.com",
        "from_name": "Company name",
        "from_id": 1,
        "from_account_id": 1,
        "to": [
            {
                "type": "to",
                "email": "recipient1@gmail.com",
                "name": "recipient1"
            }
        ],
        "track_opens": true,
        "track_click": true,
        "tags": [
            "lorem",
            "ipsum"
        ],
        "global_merge_vars": {
        "lorem": "ipsum"
        }
    }
}
*/
