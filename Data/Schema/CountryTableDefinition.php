<?php

namespace JJs\Bundle\GeonamesBundle\Data\Schema;

use Doctrine\DBAL\Schema\Table;

/**
 * Country Table Definition
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class CountryTableDefinition extends TableDefinition
{
    /**
     * Table Name
     *
     * @var string
     */
    const NAME = 'geo_country';

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
                    ->setComment('Country ID (local db)');

                $table->addColumn('code', 'string')
                    ->setLength(2)
                    ->setNotNull(true)
                    ->setComment("ISO code (2 char)");

                $table->addColumn('name', 'string')
                    ->setLength(50)
                    ->setNotNull(true)
                    ->setComment("Internationally recognised name");

                $table->addColumn('domain', 'string')
                    ->setLength(2)
                    ->setNotNull(false)
                    ->setComment("Top level domain suffix");

                $table->addColumn('postal_code_format', 'string')
                    ->setLength(60)
                    ->setNotNull(false)
                    ->setComment("Postal code format");

                $table->addColumn('postal_code_regex', 'string')
                    ->setLength(180)
                    ->setNotNull(false)
                    ->setComment("Postal code regex");

                $table->addColumn('phone_prefix', 'string')
                    ->setLength(20)
                    ->setNotNull(true)
                    ->setComment("Phone number prefix");

                // Primary key
                $table->setPrimaryKey(['id'], 'PK_GeoCountry_id');

                // Unique Keys
                $table->addUniqueIndex(['code'],   'UK_GeoCountry_code');
                $table->addUniqueIndex(['name'],   'UK_GeoCountry_name');
        }
    }
}