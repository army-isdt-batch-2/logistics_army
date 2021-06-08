<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transportation;

class TransportationController extends Controller
{
    public function transportation()
    {

        return view('transportation');
    }


    public function create_transportation()
    {

        return view('create_form.transportation');
    }

}
