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
}
