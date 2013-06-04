<?php

namespace JJs\Bundle\GeonamesBundle\Data\Schema;

use Doctrine\DBAL\Schema\Table;

/**
 * City Table Definition
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class CityTableDefinition extends LocalityTableDefinition
{
    /**
     * Table name
     *
     * @var string
     */
    const NAME = 'geo_city';

    /**
     * Defines the table at the specified version
     * 
     * @param Table  $table   Table
     * @param string $version Version
     */
    public function define(Table $table, $version)
    {
        parent::defineLocality('City', $table, $version);

        switch (true) {

            // Version 0.1.0
            case version_compare($version, "0.1.0", '>='):

                $table->addColumn('state_id', 'integer')
                    ->setUnsigned(true)
                    ->setNotNull(false)
                    ->setComment('State (=> '.StateTableDefinition::NAME.'.id');

                // Foriegn keys
                $table->addNamedForeignKeyConstraint('FK_GeoCity_state', CountryTableDefinition::NAME, ['state_id'], ['id']);

        }
    }
}