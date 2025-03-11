<?php

namespace App\Http\Controllers;

use App\Models\Nhasanxuat;
use Illuminate\Http\Request;

class ThucTapController extends Controller
{
    public function get_all(){
        $nsx = Nhasanxuat::all();
        return view('nsx.index', ['nsx' => $nsx]);
    }

    public function trashed(){
        $nhasanxuats = Nhasanxuat::onlyTrashed()->get();
        return view('nhasanxuats.trashed', compact('nhasanxuats'));
    }
}
