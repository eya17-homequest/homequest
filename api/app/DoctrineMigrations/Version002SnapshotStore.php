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
