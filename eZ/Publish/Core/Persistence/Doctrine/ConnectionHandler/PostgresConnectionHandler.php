<?php
/**
 * File containing an interface for the Doctrine database abstractions
 *
 * @copyright Copyright (C) 1999-2013 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\Persistence\Doctrine\ConnectionHandler;

use eZ\Publish\Core\Persistence\Doctrine\ConnectionHandler;

class PostgresConnectionHandler extends ConnectionHandler
{
    /**
     * Get auto increment value
     *
     * Returns the value used for autoincrement tables. Usually this will just
     * be null. In case for sequence based RDBMS this method can return a
     * proper value for the given column.
     *
     * @param string $table
     * @param string $column
     *
     * @return mixed
     */
    public function getAutoIncrementValue( $table, $column )
    {
        return "nextval('"  . $this->getSequenceName( $table, $column ) . "')";
    }

    /**
     * Returns the name of the affected sequence
     *
     * @param string $table
     * @param string $column
     *
     * @return string
     */
    public function getSequenceName( $table, $column )
    {
        return $table . '_s';
    }

    /**
     * Custom quote identifier method
     *
     * @param string $identifier
     * @return string
     */
    public function quoteIdentifier( $identifier )
    {
        return '"' . $identifier . '"';
    }
}
