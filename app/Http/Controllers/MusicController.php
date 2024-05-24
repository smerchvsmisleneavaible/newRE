<?php

namespace App\Http\Controllers;

use App\Album;
use App\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MusicController extends Controller
{
    public function show()
    {
        $mus = Music::all();
        return view('music/music-page')->with('mus', $mus);
    }
}
