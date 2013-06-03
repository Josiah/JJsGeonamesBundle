<?php

namespace JJs\Bundle\GeonamesBundle\Data\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use JJs\Bundle\GeonamesBundle\Data\Schema\SchemaDefinition;
use Doctrine\DBAL\Schema\Schema;

/**
 * Geonames Version 1
 *
 * Doctrine migration which configures the initial schema for the database
 * tables.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class GeonamesVersion1 extends AbstractMigration
{
    /**
     * Upgrade version
     *
     * Identifies the version of the geonames bundle which will be passed to the
     * schema definitions to invoke an upgrade.
     *
     * @var string
     */
    const UPGRADE_VERSION = "0.1.0";

    /**
     * Downgrade version
     *
     * Identifies the version of the geonames bundle which will be passed to the
     * schema definitions to invoke an downgrade.
     *
     * @var string
     */
    const DOWNGRADE_VERSION = "0.0.0";

    /**
     * Upgrades the geonames database schema
     * 
     * @param Schema $schema Database schema
     * 
     * @return void
     */
    public function up(Schema $schema)
    {
        (new SchemaDefinition)->define($schema, self::UPGRADE_VERSION);
    }

    /**
     * Downgrades the geonames database shema
     *
     * @param Schema $schema Database schema
     *
     * @return void
     */
    public function down(Schema $schema)
    {
        (new SchemaDefinition)->define($schema, self::DOWNGRADE_VERSION);
    }
}