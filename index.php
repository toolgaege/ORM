<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("Entity");
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'doctrinedemo',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

include_once "Entity/User.php";
include_once "Entity/UserProfile.php";
include_once "Entity/Group.php";
include_once "Entity/Course.php";
/* $user = new User();
$user->setUsername("tolga20");
$user->setEmail("asd");
$user->setPassword("asd");

$userProfile = new UserProfile();
$userProfile->setFirstName("tolga");
$userProfile->setLastName("ege");
$userProfile->setAddress("Namık Kemal");

$user->setUserProfile($userProfile); */

$users = $entityManager->getRepository('User')->findBy(array("username" => "tolga20"));
var_dump(count($users));

foreach((array)$users as $user){
    var_dump($user->getUsername());
}

$entityManager->persist($userProfile);
$entityManager->persist($user);
$entityManager->flush();
