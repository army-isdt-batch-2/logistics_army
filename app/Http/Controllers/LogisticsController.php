<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Returns;

class LogisticsController extends Controller
{
 
    protected $request;

   
    public function __construct(Request $request)
    {
        
        $this->request = $request;
    }

    public function index()
    {
      return view ('index');  
    }

    public function returns()
    {

        return view('returns');

    }
    public function create_returns()
    {   

        return view('create_form.returns');

    }
    public function save()
    {
         

        Returns::create(
            $this->request->except('_token')
        );


        return Returns::route('returns');
    }
    
}    

