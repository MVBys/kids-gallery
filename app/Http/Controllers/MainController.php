<?php

namespace App\Http\Controllers;

use App\Models\Contest;

class MainController extends Controller
{
    public function index()
    {
        $contests = Contest::where('status', '>=', 2)
            ->orderBy('status', 'asc')
            ->orderBy('end_registration_at', 'desc')
            ->simplePaginate(9);

        return view('gallery.main', compact('contests'));
    }
}
