<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transportation;
use Redirect;

class TransportationController extends Controller
{
    protected $request;

   
    public function __construct(Request $request)
    {
        
        $this->request = $request;
    }
    
    public function transportation()
    {

        return view('transportation')->with([
            'data' => Transportation::all()
        ]);
    }


    public function create_transportation()
    {

        return view('create_form.transportation');
    }

    public function save_transportation()

    {
        Transportation::create(
            $this->request->except('_token')
        );
        
        return Redirect::route('transportation');

    }
}
