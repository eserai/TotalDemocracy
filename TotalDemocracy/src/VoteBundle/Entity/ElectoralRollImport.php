<?php
/**
 * Created by PhpStorm.
 * User: Grigory
 * Date: 26/02/2016
 * Time: 6:32 PM
 */

namespace VoteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * An entry from an electoral roll that was imported
 *
 * @ORM\Entity
 * @ORM\Table(name="electoral_roll_import")
 */
class ElectoralRollImport {

    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     * @ORM\GeneratedValue(strategy="UUID")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    protected $date_created;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    protected $validDate;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    protected $surname;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    protected $givenNames;

    /**
     * @ORM\Column(type="text", nullable=false)
     */
    protected $json;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $unitNumber;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $streetNumber;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $street;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $streetType;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $suburb;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $DOB;

    /**
     * ElectoralRollImport constructor.
     * @param $surname
     * @param $givenNames
     * @param $json
     * @param $unitNumber
     * @param $streetNumber
     * @param $street
     * @param $streetType
     * @param $suburb
     * @param $DOB
     */
    public function __construct($validDate, $surname, $givenNames, $json, $unitNumber = NULL, $streetNumber = NULL, $street = NULL, $streetType = NULL, $suburb = NULL, $DOB = NULL) {
        $this->validDate = $validDate;
        $this->surname = $surname;
        $this->givenNames = $givenNames;
        $this->json = $json;
        $this->unitNumber = $unitNumber;
        $this->streetNumber = $streetNumber;
        $this->street = $street;
        $this->streetType = $streetType;
        $this->suburb = $suburb;
        $this->DOB = $DOB;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDateCreated() {
        return $this->date_created;
    }

    /**
     * @return mixed
     */
    public function getValidDate() {
        return $this->validDate;
    }

    /**
     * @param mixed $validDate
     */
    public function setValidDate($validDate) {
        $this->validDate = $validDate;
    }

    /**
     * @return mixed
     */
    public function getSurname() {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname) {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getGivenNames() {
        return $this->givenNames;
    }

    /**
     * @param mixed $givenNames
     */
    public function setGivenNames($givenNames) {
        $this->givenNames = $givenNames;
    }

    /**
     * @return mixed
     */
    public function getJson() {
        return $this->json;
    }

    /**
     * @param mixed $json
     */
    public function setJson($json) {
        $this->json = $json;
    }

    /**
     * @return mixed
     */
    public function getUnitNumber() {
        return $this->unitNumber;
    }

    /**
     * @param mixed $unitNumber
     */
    public function setUnitNumber($unitNumber) {
        $this->unitNumber = $unitNumber;
    }

    /**
     * @return mixed
     */
    public function getStreetNumber() {
        return $this->streetNumber;
    }

    /**
     * @param mixed $streetNumber
     */
    public function setStreetNumber($streetNumber) {
        $this->streetNumber = $streetNumber;
    }

    /**
     * @return mixed
     */
    public function getStreet() {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street) {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getStreetType() {
        return $this->streetType;
    }

    /**
     * @param mixed $streetType
     */
    public function setStreetType($streetType) {
        $this->streetType = $streetType;
    }

    /**
     * @return mixed
     */
    public function getSuburb() {
        return $this->suburb;
    }

    /**
     * @param mixed $suburb
     */
    public function setSuburb($suburb) {
        $this->suburb = $suburb;
    }

    /**
     * @return mixed
     */
    public function getDOB() {
        return $this->DOB;
    }

    /**
     * @param mixed $DOB
     */
    public function setDOB($DOB) {
        $this->DOB = $DOB;
    }

}