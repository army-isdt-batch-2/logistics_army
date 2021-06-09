<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistributionController extends Controller
{
    public function distribution()
    {

        return view('distribution');
    }
    
    public function create_distribution()
    {

        return view('create_form.distribution');
    }
}
