<?php
/**
* @Entity @Table("UserProfile")
**/
class UserProfile{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @Column(type="string") */
    public $firstName;
    /** @Column(type="string") */
    public $lastName;
    /** @Column(type="string") */
    public $address;
        
    function setFirstName($name){
        $this->firstName = $name;
    }
    function setLastName($name){
        $this->lastName = $name;
    }
    function setAddress($name){
        $this->address = $name;
    }
}