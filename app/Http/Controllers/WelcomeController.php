<?php

namespace App\Http\Controllers;

use App\Models\Doll;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    public function index(): View
    {
        $dolls= Doll::all();
        return view('welcome', ["dolls"=>$dolls]);
    }
}
