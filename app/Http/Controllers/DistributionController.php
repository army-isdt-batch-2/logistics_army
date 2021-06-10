<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribution;
use Redirect;

class DistributionController extends Controller
{
    protected $request;

   
    public function __construct(Request $request)
    {
        
        $this->request = $request;
    }
    
    public function distribution()
    {

        return view('distribution')->with([
            'data' => Distribution::all()
        ]);
    }
    
    public function create_distribution()
    {

        return view('create_form.distribution');
    }
    
    public function save_distribution()
    {
        Distribution::create(
            $this->request->except('_token')
        );
        
        return Redirect::route('distribution');

    }

}
