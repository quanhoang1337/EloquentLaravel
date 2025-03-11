<?php

namespace App\Http\Controllers;

use App\Models\Nhasanxuat;
use Illuminate\Http\Request;

class NhaSanXuatController extends Controller
{
    public function index(){
        $nhasanxuats = Nhasanxuat::all();
        return view('nhasanxuats.index', compact('nhasanxuats'));
    }

    public function create(){
        return view('nhasanxuats.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'ten' => 'required|String|max:255',
            'logo' => 'nullable|String',
            'status' => 'required|boolean',
        ]);
        Nhasanxuat::create($validated);
        return redirect()->route('nhasanxuats.index')->with('success', 'Tạo mới thành công');

    }
}
