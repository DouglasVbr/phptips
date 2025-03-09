<?php

namespace Source\Models;

class Post extends DataLayer
{
public function __construct()
{
    parent::__construct(entity:"posts", ["title", "description"]);

}
}