<?php
/**
* @Entity @Table("group")
**/
class Group{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @Column(type="string", unique=true) */ 
    protected $name;
    /** @ManyToMany(targetEntity="User", inversedBy="groups") */ 
    protected $users;
    
}

