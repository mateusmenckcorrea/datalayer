<?php

require_once __DIR__."../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findbyId(1);
$user->first_name = 'Adonilton';
$user->last_name = 'Rosa';

var_dump($user);

?>