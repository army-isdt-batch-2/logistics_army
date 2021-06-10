<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;
use Redirect;

class DeliveriesController extends Controller
{
    protected $request;

   
    public function __construct(Request $request)
    {
        
        $this->request = $request;
    }

    public function deliveries()
    {

        return view('deliveries')->with([
            'data' => Delivery::all()
        ]);
    }
    public function create_deliveries()
    {

        return view('create_form.deliveries');

    }
    public function save_deliveries()

    {
        Delivery::create(
            $this->request->except('_token')
        );
        
        return Redirect::route('deliveries');

    }



}
