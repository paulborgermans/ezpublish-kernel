<?php
/**
 * File containing the Storage Handler class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\Persistence\SqlNg\Content;

use eZ\Publish\SPI\Persistence\Content\Field;
use eZ\Publish\SPI\Persistence\Content\VersionInfo;

/**
 * Handler for external storages
 */
class StorageHandler
{
    /**
     * Storage registry
     *
     * @var \eZ\Publish\Core\Persistence\SqlNg\Content\StorageRegistry
     */
    protected $storageRegistry;

    /**
     * Array with database context
     *
     * @var array
     */
    protected $context;

    /**
     * Creates a new storage handler
     *
     * @param StorageRegistry $storageRegistry
     * @param array $context
     */
    public function __construct( StorageRegistry $storageRegistry, array $context )
    {
        $this->storageRegistry = $storageRegistry;
        $this->context = $context;
    }

    /**
     * Stores data from $field in its corresponding external storage
     *
     * @param \eZ\Publish\SPI\Persistence\Content\VersionInfo $versionInfo
     * @param Field $field
     *
     * @return void
     */
    public function storeFieldData( VersionInfo $versionInfo, Field $field )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Fetches external data for $field from its corresponding external storage
     *
     * @param \eZ\Publish\SPI\Persistence\Content\VersionInfo $versionInfo
     * @param Field $field
     *
     * @return void
     */
    public function getFieldData( VersionInfo $versionInfo, Field $field )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Deletes data for field $ids from external storage of $fieldType
     *
     * @param string $fieldType
     * @param \eZ\Publish\SPI\Persistence\Content\VersionInfo $versionInfo
     * @param mixed[] $ids
     *
     * @return void
     */
    public function deleteFieldData( $fieldType, VersionInfo $versionInfo, array $ids )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }
}
