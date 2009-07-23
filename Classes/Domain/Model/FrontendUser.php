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
 * A Frontend User
 *
 * @package Extbase
 * @subpackage Domain
 * @version $Id: $
 * @scope prototype
 * @entity
 */
class Tx_Extbase_Domain_Model_FrontendUser extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var string
	 */
	protected $username;

	/**
	 * @var string
	 */
	protected $password;

	/**
	 * @var Tx_Extbase_Domain_Model_FrontendUserGroup
	 */
	protected $usergroup;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $address;

	/**
	 * @var string
	 */
	protected $telephone;

	/**
	 * @var string
	 */
	protected $fax;

	/**
	 * @var string
	 */
	protected $email;

	/**
	 * @var string
	 */
	protected $lockToDomain;

	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @var string
	 */
	protected $zip;

	/**
	 * @var string
	 */
	protected $city;

	/**
	 * @var string
	 */
	protected $country;

	/**
	 * @var string
	 */
	protected $www;

	/**
	 * @var string
	 */
	protected $company;

	/**
	 * @var string
	 */
	protected $image;

	/**
	 * @var DateTime
	 */
	protected $lastlogin;

	/**
	 * @var DateTime
	 */
	protected $isOnline;

	/**
	 * Constructs a new Front-End User
	 *
	 */
	public function __construct($username, $password) {
	}
	
	/**
	 * Sets the username value
	 *
	 * @param string $username
	 * @return void
	 */
	public function setUsername($username) {
		$this->username = $username;
	}
	
	/**
	 * Returns the username value
	 *
	 * @return string
	 */
	public function getUsername() {
		return $this->username;
	}
	
	/**
	 * Sets the password value
	 *
	 * @param string $password
	 * @return void
	 */
	public function setPassword($password) {
		$this->password = $password;
	}
	
	/**
	 * Returns the password value
	 *
	 * @return string
	 */
	public function getPassword() {
		return $this->password;
	}
	
	/**
	 * Sets the usergroup value
	 *
	 * @param Tx_Extbase_Domain_Model_FrontendUserGroup $usergroup
	 * @return void
	 */
	public function setUsergroup(Tx_Extbase_Domain_Model_FrontendUserGroup $usergroup) {
		$this->usergroup = $usergroup;
	}
	
	/**
	 * Returns the usergroup value
	 *
	 * @return Tx_Extbase_Domain_Model_FrontendUserGroup
	 */
	public function getUsergroup() {
		return $this->usergroup;
	}
	
	/**
	 * Sets the name value
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}
	
	/**
	 * Returns the name value
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * Sets the address value
	 *
	 * @param string $address
	 * @return void
	 */
	public function setAddress($address) {
		$this->address = $address;
	}
	
	/**
	 * Returns the address value
	 *
	 * @return string
	 */
	public function getAddress() {
		return $this->address;
	}
	
	/**
	 * Sets the telephone value
	 *
	 * @param string $telephone
	 * @return void
	 */
	public function setTelephone($telephone) {
		$this->telephone = $telephone;
	}
	
	/**
	 * Returns the telephone value
	 *
	 * @return string
	 */
	public function getTelephone() {
		return $this->telephone;
	}
	
	/**
	 * Sets the fax value
	 *
	 * @param string $fax
	 * @return void
	 */
	public function setFax($fax) {
		$this->fax = $fax;
	}
	
	/**
	 * Returns the fax value
	 *
	 * @return string
	 */
	public function getFax() {
		return $this->fax;
	}
	
	/**
	 * Sets the email value
	 *
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}
	
	/**
	 * Returns the email value
	 *
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * Sets the lockToDomain value
	 *
	 * @param string $lockToDomain
	 * @return void
	 */
	public function setLockToDomain($lockToDomain) {
		$this->lockToDomain = $lockToDomain;
	}
	
	/**
	 * Returns the lockToDomain value
	 *
	 * @return string
	 */
	public function getLockToDomain() {
		return $this->lockToDomain;
	}
	
	/**
	 * Sets the title value
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}
	
	/**
	 * Returns the title value
	 *
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the zip value
	 *
	 * @param string $zip
	 * @return void
	 */
	public function setZip($zip) {
		$this->zip = $zip;
	}
	
	/**
	 * Returns the zip value
	 *
	 * @return string
	 */
	public function getZip() {
		return $this->zip;
	}
	
	/**
	 * Sets the city value
	 *
	 * @param string $city
	 * @return void
	 */
	public function setCity($city) {
		$this->city = $city;
	}
	
	/**
	 * Returns the city value
	 *
	 * @return string
	 */
	public function getCity() {
		return $this->city;
	}
	
	/**
	 * Sets the country value
	 *
	 * @param string $country
	 * @return void
	 */
	public function setCountry($country) {
		$this->country = $country;
	}
	
	/**
	 * Returns the country value
	 *
	 * @return string
	 */
	public function getCountry() {
		return $this->country;
	}
	
	/**
	 * Sets the www value
	 *
	 * @param string $www
	 * @return void
	 */
	public function setWww($www) {
		$this->www = $www;
	}
	
	/**
	 * Returns the www value
	 *
	 * @return string
	 */
	public function getWww() {
		return $this->www;
	}
	
	/**
	 * Sets the company value
	 *
	 * @param string $company
	 * @return void
	 */
	public function setCompany($company) {
		$this->company = $company;
	}
	
	/**
	 * Returns the company value
	 *
	 * @return string
	 */
	public function getCompany() {
		return $this->company;
	}
	
	/**
	 * Sets the image value
	 *
	 * @param string $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}
	
	/**
	 * Returns the image value
	 *
	 * @return string
	 */
	public function getImage() {
		return $this->image;
	}
	
	/**
	 * Sets the lastLogin value
	 *
	 * @param DateTime $lastLogin
	 * @return void
	 */
	public function setLastLogin($lastLogin) {
		$this->lastLogin = $lastLogin;
	}
	
	/**
	 * Returns the lastLogin value
	 *
	 * @return DateTime
	 */
	public function getLastLogin() {
		return $this->lastLogin;
	}
	
	/**
	 * Sets the isOnline value
	 *
	 * @param DateTime $isOnline
	 * @return void
	 */
	public function setIsOnline($isOnline) {
		$this->isOnline = $isOnline;
	}
	
	/**
	 * Returns the isOnline value
	 *
	 * @return DateTime
	 */
	public function getIsOnline() {
		return $this->isOnline;
	}
	
}
?>