<?php

namespace JJs\Bundle\GeonamesBundle\Data\Schema;

use Doctrine\DBAL\Schema\Table;

/**
 * State Table Definition
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class StateTableDefinition extends LocalityTableDefinition
{
    /**
     * Table name
     *
     * @var string
     */
    const NAME = 'geo_state';

    /**
     * Defines the table at the specified version
     * 
     * @param Table  $table   Table
     * @param string $version Version
     */
    public function define(Table $table, $version)
    {
        parent::defineLocality('State', $table, $version);

        switch (true) {

            // Version 0.1.0
            case version_compare($version, "0.1.0", '>='):
                // Unique Keys
                $table->addUniqueIndex(['country_id', 'name_utf8'],  'UK_GeoState_nameUtf8');
                $table->addUniqueIndex(['country_id', 'name_ascii'], 'UK_GeoState_nameAscii');

        }
    }
}