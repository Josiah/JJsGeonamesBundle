<?php

namespace JJs\Bundle\GeonamesBundle\Data\Schema;

use Doctrine\DBAL\Schema\Table;

/**
 * Table Definition
 *
 * Provides a versioned definition of a table.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
abstract class TableDefinition
{
    /**
     * Returns the name of this table
     * 
     * @return string
     */
    public function getName()
    {
        return static::NAME;
    }

    /**
     * Defines the database table at the specified version
     * 
     * @param Table  $table   Database Table
     * @param string $version Bundle version
     */
    public abstract function define(Table $table, $version);
}