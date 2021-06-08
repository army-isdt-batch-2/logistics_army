<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    protected $request;

   
    public function __construct(Request $request)
    {
        
        $this->request = $request;
    }
   
   
    public function supplier()
    {

        return view('supplier');
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


        return Supplier::route('supplier');
    }

    
}
