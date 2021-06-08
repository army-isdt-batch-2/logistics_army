<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deliveries;

class DeliveriesController extends Controller
{
    public function deliveries()
    {

        return view('deliveries');
    }

    public function create_deliveries()
    {

        return view('create_form.deliveries');

    }
}
