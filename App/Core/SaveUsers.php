<?php

namespace App\Core;

class SaveUsers
{
    public function saveUsers(array $users)
    {
        foreach ($users as $user) {
            //print_r($user);
            $f = fopen(__DIR__ . '/../../users/' . $user[1] . '.csv', 'a+');
            fwrite($f, json_encode($user));
            fclose($f);
        }
    }
}
