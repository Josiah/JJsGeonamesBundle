<?php

namespace JJs\Bundle\GeonamesBundle\Data\Schema;

use Doctrine\DBAL\Schema\Schema;

/**
 * Schema Definition
 *
 * Defines the schema which is used for this bundle and versioned using
 * semantic versioning to keep track with the bundle.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class SchemaDefinition
{
    /**
     * Drops all tables in the schema definition
     *
     * Tables are then re-created by their relevant components. Note that all
     * controlled tables across any version are dropped, even future tables.
     * 
     * @param Schema $schema  Database schema
     * @param string $version Version
     */
    protected function dropTables(Schema $schema, $version)
    {
        foreach ($this->getTableDefinitions() as $table) {
            $schema->dropTable($table->getName());
        }
    }

    /**
     * Returns the table definitions
     * 
     * @return TableDefinition[]
     */
    protected function getTableDefinitions()
    {
        return [
            new CountryTableDefinition(),
            new TimezoneTableDefinition(),
            new StateTableDefinition(),
            new CityTableDefinition(),
        ];
    }

    /**
     * Defines all the tables in the schema
     * 
     * @param Schema $schema  Database schema
     * @param string $version Table version
     */
    protected function defineTables(Schema $schema, $version)
    {
        // Load all table definitions
        foreach ($this->getTableDefinitions() as $tableDefinition) {
            // Drop all tables
            if ($schema->hasTable($tableDefinition->getName())) {
                $schema->dropTable($tableDefinition->getName());
            }

            // Only create the table if it exists in this version of the schema
            $table = $schema->createTable($tableDefinition->getName());
            $tableDefinition->define($table, $version);

            // If the table has no columns, drop it
            if (count($table->getColumns()) < 1) {
                $schema->dropTable($tableDefinition->getName());
            }
        }
    }

    /**
     * Defines the database schema in the state it should be in for the
     * specified version.
     * 
     * @param Schema $schema  Database schema
     * @param string $version Version
     * 
     * @return void
     */
    public function define(Schema $schema, $version)
    {
        $this->defineTables($schema, $version);
    }
}