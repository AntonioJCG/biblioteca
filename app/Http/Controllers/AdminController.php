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

    public function update()
    {
        return view('admin.update');
    }

    public function delete()
    {
        $id = Libro::all();
        return view('admin.delete', compact('id'));
    }
}
