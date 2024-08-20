<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class AnimalController extends Controller
{
    public function walk()
    {
        echo "Walking";
    }


    public function getwalk()
    {
        echo "get request walk method";
    }
    public function postwalk()
    {
        echo "post request walk method";
    }
}
