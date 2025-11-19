<?php

namespace App\Http\Controllers;

use App\Models\Doll;
use App\Models\StaticPage;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    public function index(): View
    {
        $dolls = Doll::all();
        $aboutMe = StaticPage::query()->where('slug', 'about')->first();
        $meeting = StaticPage::query()->where('slug', 'meeting')->first();

        return view('welcome.index', [
            "aboutMe" => $aboutMe,
            "meeting" => $meeting,
            "dolls" => $dolls,
        ]);
    }
}
