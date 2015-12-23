<?php
/**
* @Entity @Table("user")
**/
class User{
      
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @Column(type="string", length=50) */ 
    protected $username;
    /** @Column(type="string") */ 
    protected $password;
    /** @Column(type="string", length=50) */ 
    protected $email;
    /** @OneToOne(targetEntity="UserProfile") */ 
    protected $userProfile;
    /** @OneToMany(targetEntity="Course", mappedBy="user") */ 
    protected $courses;
    /** @ManyToMany(targetEntity="Group", mappedBy="users") */ 
    protected $userGroups;
    
    function getUsername(){
        return $this->username;
    }
    
    function setUsername($name){
        $this->username = $name;
    }
    function setPassword($name){
        $this->password = $name;
    }
    
    function setEmail($name){
        $this->email = $name;
    }
    
    function setUserProfile(UserProfile $userProfile){
        $this->userProfile = $userProfile;
    }
    
}

//vendor/bin/doctrine orm:schema-tool:create
