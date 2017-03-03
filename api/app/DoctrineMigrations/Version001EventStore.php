<?php

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
