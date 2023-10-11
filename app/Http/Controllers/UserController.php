<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Consulta;

class UserController extends Controller
{
    public function index()
    {
        $data = Consulta::all();
       
        return view('/admin', compact('data'));
    }
}
