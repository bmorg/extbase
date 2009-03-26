<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 Jochen Rau <jochen.rau@typoplanet.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * A column map to map a column configured in $TCA on a property of a domain object.
 *
 * @package TYPO3
 * @subpackage extbase
 * @version $ID:$
 */
// SK: I did not do an in-depth check of this class
// SK: PHPDoc ;-)
class Tx_ExtBase_Persistence_Mapper_ColumnMap {

	/**
	 * Constants reflecting the type of relation
	 */
	const RELATION_NONE = 0;
	const RELATION_HAS_ONE = 1;
	const RELATION_HAS_MANY = 2;
	const RELATION_HAS_AND_BELONGS_TO_MANY = 3;

	/**
	 * Constants reflecting the type of value
	 */
	const TYPE_UNKNOWN = 0;
	const TYPE_STRING = 1;
	const TYPE_DATE = 2;
	const TYPE_INTEGER = 3;
	const TYPE_FLOAT = 4;
	const TYPE_BOOLEAN = 5;

	/**
	 * The property name corresponding to the table name
	 *
	 * @var string
	 **/
	protected $propertyName;

	/**
	 * The column name
	 *
	 * @var string
	 **/
	protected $columnName;

	/**
	 * The type of relation
	 *
	 * @var int
	 **/
	protected $typeOfRelation;

	/**
	 * The type of value
	 *
	 * @var int
	 **/
	protected $typeOfValue;

	/**
	 * The name of the child's class
	 *
	 * @var string
	 **/
	protected $childClassName;

	/**
	 * The name of the child's table
	 *
	 * @var string
	 **/
	protected $childTableName;

	/**
	 * The where clause to narrow down the selected child records
	 *
	 * @var string
	 **/
	protected $childTableWhere;

	/**
	 * The name of the field the results from the child's table are sorted by
	 *
	 * @var string
	 **/
	protected $childSortByFieldName;

	/**
	 * The name of the relation table
	 *
	 * @var string
	 **/
	protected $relationTableName;

	/**
	 * The name of the field holding the parents key
	 *
	 * @var string
	 **/
	protected $parentKeyFieldName;

	/**
	 * The name of the field holding the name of the table of the parent's records
	 *
	 * @var string
	 **/
	protected $parentTableFieldName;

	public function __construct($columnName) {
		// TODO Enable aliases (tx_anotherextension_addedcolumn -> theAddedColumn)
		$this->setColumnName($columnName);
		$this->setPropertyName(Tx_ExtBase_Utility_Strings::underscoredToLowerCamelCase($columnName));
	}

	public function setTypeOfRelation($typeOfRelation) {
		switch ($typeOfRelation) {
			case self::RELATION_NONE;
			case self::RELATION_HAS_ONE;
			case self::RELATION_HAS_MANY;
			case self::RELATION_HAS_AND_BELONGS_TO_MANY;
				$this->typeOfRelation = $typeOfRelation;
				break;
			default:
				$this->typeOfRelation = NULL;
				break;
		}
	}

	public function isRelation() {
		return $this->typeOfRelation !== NULL && $this->typeOfRelation !== self::RELATION_NONE;
	}

	public function getTypeOfRelation() {
		return $this->typeOfRelation;
	}

	public function setTypeOfValue($typeOfValue) {
		switch ($typeOfValue) {
			case self::TYPE_UNKNOWN;
			case self::TYPE_STRING;
			case self::TYPE_DATE;
			case self::TYPE_INTEGER;
			case self::TYPE_FLOAT;
			case self::TYPE_BOOLEAN;
				$this->typeOfValue = $typeOfValue;
				break;
			default:
				$this->typeOfValue = NULL;
				break;
		}
	}

	public function getTypeOfValue() {
		return $this->typeOfValue;
	}

	public function setPropertyName($propertyName) {
		$this->propertyName = $propertyName;
	}

	public function getPropertyName() {
		return $this->propertyName;
	}

	public function setColumnName($columnName) {
		$this->columnName = $columnName;
	}

	public function getColumnName() {
		return $this->columnName;
	}

	public function setChildClassName($childClassName) {
		$this->childClassName = $childClassName;
	}

	public function getChildClassName() {
		return $this->childClassName;
	}

	public function setChildTableName($childTableName) {
		$this->childTableName = $childTableName;
	}

	public function getChildTableName() {
		return $this->childTableName;
	}

	public function setChildTableWhere($childTableWhere) {
		$this->childTableWhere = $childTableWhere;
	}

	public function getChildTableWhere() {
		return $this->childTableWhere;
	}

	public function setChildSortByFieldName($childSortByFieldName) {
		$this->childSortByFieldName = $childSortByFieldName;
	}

	public function getChildSortByFieldName() {
		return $this->childSortByFieldName;
	}

	public function setRelationTableName($relationTableName) {
		$this->relationTableName = $relationTableName;
	}

	public function getRelationTableName() {
		return $this->relationTableName;
	}

	public function setParentKeyFieldName($parentKeyFieldName) {
		$this->parentKeyFieldName = $parentKeyFieldName;
	}

	public function getParentKeyFieldName() {
		return $this->parentKeyFieldName;
	}

	public function setParentTableFieldName($parentTableFieldName) {
		$this->parentTableFieldName = $parentTableFieldName;
	}

	public function getParentTableFieldName() {
		return $this->parentTableFieldName;
	}

}
?>