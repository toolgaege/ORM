<?php
/**
* @Entity @Table("course")
**/
class Course{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @Column(type="string") */ 
    protected $name;
    /** @Column(type="string") */ 
    protected $maxScore;
    
    /** @ManyToOne(targetEntity="User") */ 
    protected $user;
}

//vendor/bin/doctrine orm:schema-tool:create