<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends AnimalController
{
    public function meow()
    {
        echo "meowing";
    }
}
