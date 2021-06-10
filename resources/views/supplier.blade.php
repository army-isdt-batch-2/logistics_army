@php $active = 'supplier' @endphp
@extends('layouts.main')
@section('title','supplier')
@section('content') 


<div class="row"> 
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row"> 

                    <div class="col-10">
                        <h4>
                            Supplier 
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href='/create.form.supplier' class="btn btn-dark pull-right">Create</a>
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
                                    <th scope="col">Contact</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Contact Person</th>
                                    <th scope="col">Category</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($data as $x)
                                    <tr> 
                                        <th scope="row">{{ $x->name }}</th>  
                                        <th scope="row">{{ $x->contact}}</th> 
                                        <th scope="row">{{ $x->address }}</th> 
                                         <th scope="row">{{ $x->contact_person }}</th> 
                                        <th scope="row">{{ $x->category }}</th> 
                                        <th scope="row">
                                        <a href="" class="btn btn-dark btn">update</a>
                                        <a href="{{ URL::route('supplier.delete', $x->id) }}" class="btn btn-dark btn">delete</a>
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
  