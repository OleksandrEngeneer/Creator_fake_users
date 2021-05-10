<?php

namespace App\Core;

use Faker\Factory as FakerFactory;


class User
{
    public $users = [];
    protected $faker;
    protected $USERS;
    public function __construct(int $number)
    {
        $this->USERS = $number;
    }
    public function create()
    {
        $USERS = $this->USERS;
        $this->faker = FakerFactory::create();
        for ($i = 0; $i < $USERS; $i++) {
            $name = $this->faker->name;
            $email = $this->faker->email;
            $str = array($name, $email);
            $users[] = $str;
        }
        return $users;
    }
}
