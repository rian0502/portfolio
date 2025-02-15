<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use App\Models\Certifications;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index(){
        $data = [
            'certifications' => Certifications::all(),
            'projects' => Projects::all(),
        ];
        return view('home.index', $data);
    }
}
