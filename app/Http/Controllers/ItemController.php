<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        // Will display a React file (Resources -  JS - Pages - Items - Index.tsx)
        // return inertia('items/Index');

        // Will display a blade file (Resources ->  Views -> Items -> Index.blade.php)
        return view('items/Index');
    }

    public function store()
    {
        //
    }
}
