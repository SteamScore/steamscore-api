<?php

declare(strict_types=1);

/*
 * This file is part of SteamScore.
 *
 * (c) SteamScore <code@steamscore.info>
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */

use SteamScore\Api\Console;
use SteamScore\Api\Factory;

return [
    'dependencies' => [
        'factories' => [
            Console\Commands\BucketBootstrapCommand::class => Factory\Commands\BucketBootstrapCommandFactory::class,
            Console\Commands\GamesFetchCommand::class => Factory\Commands\GamesFetchCommandFactory::class,
        ],
    ],
];
