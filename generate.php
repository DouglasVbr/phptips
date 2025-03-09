<?php

require __DIR__ . "/vendor/autoload.php";

use Source\Models\Post;
use Source\Provider\Image;
use Source\Provider\Lorem;
use Source\Modls\Post;

for($i= 0; $i < 30; $i++ ){
     $post = new Post();
     $post->title = Lorem::text(maxNbChars:80);
     $post->cover = Image::image(dir: "images", width: 300, height: 150);
     $post->description = Lorem::paragraph(nb:2, asText:true);

     $post->save();
}