<?php

namespace App\Http\Controllers;

use App\Models\Hazifeladatok;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $hazifeladatokCount = Hazifeladatok::count();

        return view('stats', [
            'hazifeladatokCount' => $hazifeladatokCount,
        ]);
}
}
