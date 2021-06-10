@php $active = 'assets' @endphp
@extends('layouts.main')
@section('title','assets')
@section('content') 


<div class="row"> 
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row"> 

                    <div class="col-10">
                        <h4>
                            Assets 
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href='/create.form.assets' class="btn btn-dark pull-right">Create</a>
                    </div> 
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-8"></div>
                    <div class="col-4 text-end"> 
                        <input type="text" class="form-control" placeholder="Search">
                    </div> 

                    <div class="col-12">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Supplier ID</th>
                                    <th scope="col">Storage ID</th>
                                    <th scope="col">Total Stocks</th> 


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($data as $x)
                                        <tr> 
                                        <th scope="row">{{ $x->name }}</th>  
                                        <th scope="row">{{ $x->description}}</th> 
                                        <th scope="row">{{ $x->category }}</th> 
                                         <th scope="row">{{ $x->supplier_id }}</th> 
                                        <th scope="row">{{ $x->storage_id }}</th> 
                                        <th scope="row">{{ $x->total_stocks }}</th> 
                                        <th scope="row">
                                        <a href="" class="btn btn-dark btn">update</a>
                                        <a href="" class="btn btn-dark btn">delete</a>
                                        </th>
                                         </tr>
                                    @endforeach
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 

</div>  

@endsection
  