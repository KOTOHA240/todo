<?php

namespace App\Http\Controllers;

use Illuminate\Http\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
