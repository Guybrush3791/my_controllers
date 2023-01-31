<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Degrees;

class MainController extends Controller
{
    public function home() {


        $degrees = Degrees::all();

        $firstDegree = $degrees[0];
        $firstDegree -> setName("mio nome");
        $firstDegree -> save();

        // var_dump($firstDegree); die();

        $data = [

            'degrees' => $degrees
        ];

        return view('pages.home', $data);
    }
}