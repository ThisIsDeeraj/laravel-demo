<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function homepage()
    {
        $name = "<span>Nehal</span>";
        $time = "12:00";

        // $animal = Animal::where('type','=','cat')->first();
        $animals = Animal::get();


        return view('welcome', compact("name", "time", "animals"));
    }


    public function loopDemo()
    {


        // dump("here");
        // die();

        // dump("logic is executing");


        // dd("here");

        // dump("logic is executing");
        $students = [
            [
                "name" => "John Doe",
                "age" => 20,
                "major" => "Computer Science",
                "grade" => "A"
            ],
            [
                "name" => "Jane Smith",
                "age" => 22,
                "major" => "Mathematics",
                "grade" => "B+"
            ],
            [
                "name" => "Mark Johnson",
                "age" => 21,
                "major" => "Physics",
                "grade" => "A-"
            ],
            [
                "name" => "Emily Davis",
                "age" => 19,
                "major" => "Biology",
                "grade" => "B"
            ],
            [
                "name" => "Chris Evans",
                "age" => 23,
                "major" => "Chemistry",
                "grade" => "A+"
            ],
            [
                "name" => "Sarah Connor",
                "age" => 20,
                "major" => "Electrical Engineering",
                "grade" => "A"
            ],
            [
                "name" => "Michael Jordan",
                "age" => 21,
                "major" => "Mechanical Engineering",
                "grade" => "B+"
            ],
            [
                "name" => "Olivia Brown",
                "age" => 22,
                "major" => "History",
                "grade" => "B"
            ],
            [
                "name" => "David Williams",
                "age" => 24,
                "major" => "Economics",
                "grade" => "A-"
            ],
            [
                "name" => "Sophia Martinez",
                "age" => 19,
                "major" => "Political Science",
                "grade" => "A+"
            ]
        ];

        // for ($i = 0; $i < count($students); $i++) {
        //     dump($students[$i]['name']);
        // }

        // foreach ($students as $index => $student) {
        //     dump($index);
        //     dump($student);
        // }
        $studentCollection = collect($students);
        // array 
        dump(count($students) > 0);
        //collection
        dump($studentCollection->isNotEmpty());
        // array 
        dump($students[1]['name']);
      
    }


    public function landingPage() {
        return view("sub-folder.home-with-style");
    }
}
