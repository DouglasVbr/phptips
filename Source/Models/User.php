<?php
use CoffeeCode\DataLayer\DataLayer;
namespace source\Models;


class User extends DataLayer
{
public function __construct()
{
   parent::__construct("users", ["first_name", "last_name"]);

}
public function addresses()
{
    return(new Address())->find( terms: "user_id = :uid", params: "uid={$this->id}" )->fetch(true);

   }
}
