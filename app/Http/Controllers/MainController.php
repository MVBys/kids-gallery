<?php

namespace App\Http\Controllers;

use App\Models\Contest;

class MainController extends Controller
{
    public function index()
    {
        $contests = Contest::where('status', '>=', 2)
            ->orderBy('end_registration_at', 'desc')
            ->get();

        return view('gallery.main', compact('contests'));
    }
}
