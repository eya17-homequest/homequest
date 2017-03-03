<?php

declare(strict_types=1);

/*
 * This file is part of the HomeQuest app.
 *
 * (c) Patrik Karisch <patrik@karisch.guru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Prooph\EventStore\Adapter\Doctrine\Schema\EventStoreSchema;

class Version001EventStore extends AbstractMigration
{
    public function up(Schema $schema)
    {
        EventStoreSchema::createSingleStream($schema, 'event_stream', true);
    }

    public function down(Schema $schema)
    {
        EventStoreSchema::dropStream($schema, 'event_stream');
    }
}
