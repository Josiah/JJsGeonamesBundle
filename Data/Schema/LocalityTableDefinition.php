<?php

namespace JJs\Bundle\GeonamesBundle\Data\Schema;

use Doctrine\DBAL\Schema\Table;

/**
 * Locality Table Definition
 *
 * @author Josiah <josiah@jjs.id.au>
 */
abstract class LocalityTableDefinition extends TableDefinition
{
    /**
     * Defines the locality columns and constraints
     * 
     * @param string $locality Locality type name
     * @param Table  $table    Database table
     * @param string $version  Bundle version
     */
    protected function defineLocality($locality, Table $table, $version)
    {
        switch (true) {

            // Version 0.1.0
            case version_compare($version, "0.1.0", '>='):

                $table->addColumn('id', 'integer')
                    ->setUnsigned(true)
                    ->setNotNull(true)
                    ->setAutoIncrement(true)
                    ->setComment("{$locality} ID");

                $table->addColumn('geoname_id', 'integer')
                    ->setUnsigned(true)
                    ->setNotNull(false)
                    ->setComment('GeoNames.org ID');

                $table->addColumn('country_id', 'integer')
                    ->setUnsigned(true)
                    ->setNotNull(true)
                    ->setComment('Country (=> '.CountryTableDefinition::NAME.'.id)');

                $table->addColumn('name_utf8', 'string')
                    ->setLength(200)
                    ->setNotNull(true)
                    ->setComment("Name (UTF-8 encoding)");

                $table->addColumn('name_ascii', 'string')
                    ->setLength(200)
                    ->setNotNull(false)
                    ->setComment("Name (ASCII encoding)");

                $table->addColumn('latitude', 'decimal')
                    ->setPrecision(9)
                    ->setScale(6)
                    ->setNotNull(false)
                    ->setComment("Latitude coordinate");

                $table->addColumn('longitude', 'decimal')
                    ->setPrecision(9)
                    ->setScale(6)
                    ->setNotNull(false)
                    ->setComment("Longitude coordinate");

                $table->addColumn('timezone_id', 'integer')
                    ->setUnsigned(true)
                    ->setNotNull(false)
                    ->setComment("Timezone");

                $table->addColumn('creation_date', 'datetime')
                    ->setNotNull(true)
                    ->setComment("Database creation date");

                $table->addColumn('modification_date', 'datetime')
                    ->setNotNull(false)
                    ->setComment("Database modification date");

                // Primary key
                $table->setPrimaryKey(['id'], "PK_Geo{$locality}_id");

                // Unique Keys
                $table->addUniqueIndex(['geoname_id'],  'UK_Geo{$locality}_geoname');

                // Foriegn keys
                $table->addNamedForeignKeyConstraint("FK_Geo{$locality}_country", CountryTableDefinition::NAME, ['country_id'], ['id']);
                $table->addNamedForeignKeyConstraint("FK_Geo{$locality}_timezone", TimezoneTableDefinition::NAME, ['timezone_id'], ['id']);
        }
    }
}