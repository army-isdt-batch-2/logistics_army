<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Storage;
use Redirect;

class StorageController extends Controller
{
    protected $request;

   
    public function __construct(Request $request)
    {
        
        $this->request = $request;
    }
    
    
    public function storage()
    {

        return view('storage')->with([
            'data' => Storage::all()
        ]);
    }

    public function create_storage()
    {

        return view('create_form.storage');
    }

    public function save_storage()
    {

        Storage::create(
            $this->request->except('_token')
        );
        
        return Redirect::route('storage');
    }

    public function update_storage($id)

    {

        return view('update_form.storage')->with([
            'data' => Storage::find($id)
        ]);
    }

     public function storage_save($id)
    {

        Storage::find($id)->update(
            $this->request->except('_token')
        );

        return Redirect::route('storage');

    }



    

}
