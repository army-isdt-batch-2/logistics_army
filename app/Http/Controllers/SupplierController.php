<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Redirect;

class SupplierController extends Controller
{
    protected $request;

   
    public function __construct(Request $request)
    {
        
        $this->request = $request;
    }
   
   
    public function supplier()
    {

        return view('supplier')->with([
            'data' => Supplier::all()
        ]);
    }


    public function create_supplier()
    {

        return view('create_form.supplier');
    }

    public function supplier_save()
    {

        Supplier::create(
            $this->request->except('_token')
        );


        return Redirect::route('supplier');
    }

    
}
