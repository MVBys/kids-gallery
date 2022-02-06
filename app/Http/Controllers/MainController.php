<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Illuminate\Support\Facades\Auth;

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


    public function message($message)
    {
        return view('gallery.message', compact('message'));
    }

    public function cabinet()
    {
        $contests = Contest::where('user_id', Auth::id())->orderByDesc('created_at')->get();
        return view('gallery.cabinet', compact('contests'));
    }
}
