<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function assets()
    {

        return view('assets');
    }
    public function create_assets()
    {

        return view('create_form.assets');
    }
}
