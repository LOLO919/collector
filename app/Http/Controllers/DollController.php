<?php

namespace App\Http\Controllers;

use App\Models\Doll;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DollController extends Controller
{
    public function show(Request $request, Doll $doll): View
    {
        return view('dolls.show', ['doll' => $doll]);
    }
}
