<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Prooph\EventStore\Snapshot\Adapter\Doctrine\Schema\SnapshotStoreSchema;

class Version002SnapshotStore extends AbstractMigration
{
    public function up(Schema $schema)
    {
        SnapshotStoreSchema::create($schema, 'snapshot');
    }

    public function down(Schema $schema)
    {
        SnapshotStoreSchema::drop($schema, 'snapshot');
    }
}
