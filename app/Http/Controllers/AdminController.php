<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        $id = Libro::all();
        return view('admin.create', compact('id'));
    }

    public function update(Request $request)
    {
        $libro = Libro::where('id', $request->id)->get();
        return view('admin.update', compact('libro'));
    }

    public function delete()
    {
        $id = Libro::all();
        return view('admin.delete', compact('id'));
    }
}
