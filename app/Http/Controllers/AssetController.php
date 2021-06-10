<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use Redirect;

class AssetController extends Controller
{


    protected $request;

   
    public function __construct(Request $request)
    {
        
        $this->request = $request;
    }
    
    public function assets()
    {

        return view('assets')->with([
            'data' => Asset::all()
        ]);
    }

    public function create_assets()
    {

        return view('create_form.assets');
    }

    public function asset_save()
    {

        Asset::create(
            $this->request->except('_token')
        );

        return Redirect::route('assets');
    }
}
