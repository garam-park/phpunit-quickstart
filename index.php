<?php
use StoryG\User;

require_once(__DIR__."/vendor/autoload.php");

$user = new User;
$user->changeName('garam','park');

print($user->getFullName()."\n");

