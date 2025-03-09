<?php

namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;

class Address extends DataLayer{



    public function __construct()
    {
    parent::__construct("address", ["user_id"], primary:"", timestamps:false);{




    }
    public function add(user $user, string $street, string $number): Address
    {
        $this->user_id = $user->id;
        $this->street = $street;
        $this->number = $number;



        return $this;

    }
    }
    }
