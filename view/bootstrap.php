<?php
require_once __DIR__ . '/../App/configs/config.php';
require_once __DIR__ . '/../vendor/autoload.php';


use App\Core\User;
use App\Core\SaveUsers;

$new_User = new User(USERS);
$SaveUsers = new SaveUsers;
$people = $new_User->create();
$SaveUsers->saveUsers($people);

require_once __DIR__ . '/master.php';
