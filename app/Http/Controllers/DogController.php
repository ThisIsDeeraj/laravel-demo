<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogController extends AnimalController
{
    public function bark()  {
        echo "barking";
    }
}
