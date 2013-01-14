<?php
/**
 * File containing the EzcDatabase class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\Persistence\SqlNg\Content\Type\Gateway;

use eZ\Publish\Core\Persistence\SqlNg\Content\Type\Gateway;
use eZ\Publish\Core\Persistence\Legacy\EzcDbHandler;
use eZ\Publish\SPI\Persistence\Content\Type;
use eZ\Publish\SPI\Persistence\Content\Type\FieldDefinition;
use eZ\Publish\SPI\Persistence\Content\Type\UpdateStruct;
use eZ\Publish\SPI\Persistence\Content\Type\Group;
use eZ\Publish\SPI\Persistence\Content\Type\Group\UpdateStruct as GroupUpdateStruct;
use eZ\Publish\Core\Persistence\SqlNg\Content\StorageFieldDefinition;
use ezcQuery;
use ezcQuerySelect;

/**
 * Zeta Component Database based content type gateway.
 */
class EzcDatabase extends Gateway
{
    /**
     * Zeta Components database handler.
     *
     * @var \ezcDbHandler
     */
    protected $dbHandler;

    /**
     * Creates a new gateway based on $dbHandler
     *
     * @param \eZ\Publish\Core\Persistence\Legacy\EzcDbHandler $dbHandler
     */
    public function __construct( EzcDbHandler $dbHandler )
    {
        $this->dbHandler = $dbHandler;
    }

    /**
     * Inserts the given $group.
     *
     * @param \eZ\Publish\SPI\Persistence\Content\Type\Group $group
     *
     * @return mixed Group ID
     */
    public function insertGroup( Group $group )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Updates a group with data in $group.
     *
     * @param \eZ\Publish\SPI\Persistence\Content\Type\Group\UpdateStruct $group
     *
     * @return void
     */
    public function updateGroup( GroupUpdateStruct $group )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Returns the number of types in a certain group.
     *
     * @param int $groupId
     *
     * @return int
     */
    public function countTypesInGroup( $groupId )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Returns the number of Groups the type is assigned to.
     *
     * @param int $typeId
     * @param int $status
     *
     * @return int
     */
    public function countGroupsForType( $typeId, $status )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Deletes the Group with the given $groupId.
     *
     * @param int $groupId
     *
     * @return void
     */
    public function deleteGroup( $groupId )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Inserts a new content type.
     *
     * @param \eZ\Publish\SPI\Persistence\Content\Type $type
     * @param mixed|null $typeId
     *
     * @return mixed Type ID
     */
    public function insertType( Type $type, $typeId = null )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Insert assignment of $typeId to $groupId.
     *
     * @param mixed $groupId
     * @param mixed $typeId
     * @param int $status
     *
     * @return void
     */
    public function insertGroupAssignment( $groupId, $typeId, $status )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Deletes a group assignments for a Type.
     *
     * @param mixed $groupId
     * @param mixed $typeId
     * @param int $status
     *
     * @return void
     */
    public function deleteGroupAssignment( $groupId, $typeId, $status )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Loads data about Group with $groupId.
     *
     * @param mixed $groupId
     *
     * @return string[][]
     */
    public function loadGroupData( $groupId )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Loads data about Group with $identifier.
     *
     * @param mixed $identifier
     *
     * @return string[][]
     */
    public function loadGroupDataByIdentifier( $identifier )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Returns an array with data about all Group objects.
     *
     * @return string[][]
     */
    public function loadAllGroupsData()
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Loads data for all Types in $status in $groupId.
     *
     * @param mixed $groupId
     * @param int $status
     *
     * @return string[][]
     */
    public function loadTypesDataForGroup( $groupId, $status )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Inserts a $fieldDefinition for $typeId.
     *
     * @param mixed $typeId
     * @param int $status
     * @param \eZ\Publish\SPI\Persistence\Content\Type\FieldDefinition $fieldDefinition
     * @param \eZ\Publish\Core\Persistence\SqlNg\Content\StorageFieldDefinition $storageFieldDef
     *
     * @return mixed Field definition ID
     */
    public function insertFieldDefinition(
        $typeId,
        $status,
        FieldDefinition $fieldDefinition,
        StorageFieldDefinition $storageFieldDef
    )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Loads an array with data about field definition referred $id and $status.
     *
     * @param mixed $id field definition id
     * @param int $status One of Type::STATUS_DEFINED|Type::STATUS_DRAFT|Type::STATUS_MODIFIED
     *
     * @return array Data rows.
     */
    public function loadFieldDefinition( $id, $status )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Deletes a field definition.
     *
     * @param mixed $typeId
     * @param int $status
     * @param mixed $fieldDefinitionId
     *
     * @return void
     */
    public function deleteFieldDefinition( $typeId, $status, $fieldDefinitionId )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Updates a $fieldDefinition for $typeId.
     *
     * @param mixed $typeId
     * @param int $status
     * @param \eZ\Publish\SPI\Persistence\Content\Type\FieldDefinition $fieldDefinition
     * @param \eZ\Publish\Core\Persistence\SqlNg\Content\StorageFieldDefinition $storageFieldDef
     *
     * @return void
     */
    public function updateFieldDefinition(
        $typeId, $status, FieldDefinition $fieldDefinition,
        StorageFieldDefinition $storageFieldDef
    )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Update a type with $updateStruct.
     *
     * @param mixed $typeId
     * @param int $status
     * @param \eZ\Publish\SPI\Persistence\Content\Type\UpdateStruct $updateStruct
     *
     * @return void
     */
    public function updateType( $typeId, $status, UpdateStruct $updateStruct )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Loads an array with data about $typeId in $status.
     *
     * @param mixed $typeId
     * @param int $status
     *
     * @return array Data rows.
     */
    public function loadTypeData( $typeId, $status )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Loads an array with data about the type referred to by $identifier in
     * $status.
     *
     * @param string $identifier
     * @param int $status
     *
     * @return array(int=>array(string=>mixed)) Data rows.
     */
    public function loadTypeDataByIdentifier( $identifier, $status )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Loads an array with data about the type referred to by $remoteId in
     * $status.
     *
     * @param mixed $remoteId
     * @param int $status
     *
     * @return array(int=>array(string=>mixed)) Data rows.
     */
    public function loadTypeDataByRemoteId( $remoteId, $status )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Counts the number of instances that exists of the identified type.
     *
     * @param int $typeId
     *
     * @return int
     */
    public function countInstancesOfType( $typeId )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Deletes all field definitions of a Type.
     *
     * @param mixed $typeId
     * @param int $status
     *
     * @return void
     */
    public function deleteFieldDefinitionsForType( $typeId, $status )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Deletes a Type completely.
     *
     * @param mixed $typeId
     * @param int $status
     *
     * @return void
     */
    public function delete( $typeId, $status )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Deletes a the Type.
     *
     * Does no delete the field definitions!
     *
     * @param mixed $typeId
     * @param int $status
     *
     * @return void
     */
    public function deleteType( $typeId, $status )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Deletes all group assignments for a Type.
     *
     * @param mixed $typeId
     * @param int $status
     *
     * @return void
     */
    public function deleteGroupAssignmentsForType( $typeId, $status )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }

    /**
     * Publishes the Type with $typeId from $sourceVersion to $targetVersion,
     * including its fields
     *
     * @param int $typeId
     * @param int $sourceVersion
     * @param int $targetVersion
     *
     * @return void
     */
    public function publishTypeAndFields( $typeId, $sourceVersion, $targetVersion )
    {
        throw new \RuntimeException( "@TODO: Implement" );
    }
}
