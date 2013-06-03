<?php

namespace JJs\Bundle\GeonamesBundle\Data\Schema;

use Doctrine\DBAL\Schema\Table;

/**
 * Timezone Table Definition
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class TimezoneTableDefinition extends TableDefinition
{
    /**
     * Table Name
     *
     * @var string
     */
    const NAME = 'geo_timezone';

    /**
     * Defines the table at the specified version
     * 
     * @param Table  $table   Table
     * @param string $version Version
     */
    public function define(Table $table, $version)
    {
        switch (true) {

            // Version 0.1.0
            case version_compare($version, "0.1.0", '>='):

                $table->addColumn('id', 'integer')
                    ->setUnsigned(true)
                    ->setNotNull(true)
                    ->setAutoIncrement(true)
                    ->setComment('Timezone ID (local db)');

                $table->addColumn('country_id', 'integer')
                    ->setUnsigned(true)
                    ->setNotNull(true)
                    ->setComment('Country (=> '.CountryTableDefinition::NAME.'.id)');

                $table->addColumn('code', 'string')
                    ->setLength(50)
                    ->setNotNull(false)
                    ->setComment("Timezone code");

                // Primary key
                $table->setPrimaryKey(['id'], 'PK_GeoTimezone_id');

                // Foriegn keys
                $table->addNamedForeignKeyConstraint('FK_GeoTimezone_country', CountryTableDefinition::NAME, ['country_id'], ['id']);

                // Unique Keys
                $table->addUniqueIndex(['code'], 'UK_GeoTimezone_code');
        }
    }
}