<?php
/**
 * File containing the DoctrineDatabase location main status criterion handler class
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\Persistence\Legacy\Content\Search\Location\Gateway\CriterionHandler\Location;

use eZ\Publish\Core\Persistence\Legacy\Content\Search\Common\Gateway\CriterionHandler;
use eZ\Publish\Core\Persistence\Legacy\Content\Search\Common\Gateway\CriteriaConverter;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use RuntimeException;
use eZ\Publish\Core\Persistence\Database\SelectQuery;

/**
 * Location main status criterion handler
 */
class IsMainLocation extends CriterionHandler
{
    /**
     * Check if this criterion handler accepts to handle the given criterion.
     *
     * @param \eZ\Publish\API\Repository\Values\Content\Query\Criterion $criterion
     *
     * @return boolean
     */
    public function accept( Criterion $criterion )
    {
        return $criterion instanceof Criterion\Location\IsMainLocation;
    }

    /**
     * Generate query expression for a Criterion this handler accepts
     *
     * accept() must be called before calling this method.
     *
     * @param \eZ\Publish\Core\Persistence\Legacy\Content\Search\Common\Gateway\CriteriaConverter $converter
     * @param \eZ\Publish\Core\Persistence\Database\SelectQuery $query
     * @param \eZ\Publish\API\Repository\Values\Content\Query\Criterion$criterion
     *
     * @return \eZ\Publish\Core\Persistence\Database\Expression
     */
    public function handle( CriteriaConverter $converter, SelectQuery $query, Criterion $criterion )
    {
        $idColumn = $this->dbHandler->quoteColumn( 'node_id', 'ezcontentobject_tree' );
        $mainIdColumn = $this->dbHandler->quoteColumn( 'main_node_id', 'ezcontentobject_tree' );

        switch ( $criterion->value[0] )
        {
            case Criterion\Location\IsMainLocation::MAIN:
                return $query->expr->eq(
                    $idColumn,
                    $mainIdColumn
                );

            case Criterion\Location\IsMainLocation::NOT_MAIN:
                return $query->expr->neq(
                    $idColumn,
                    $mainIdColumn
                );

            default:
                throw new RuntimeException(
                    "Unknown value '{$criterion->value[0]}' for IsMainLocation criterion handler."
                );
        }
    }
}

