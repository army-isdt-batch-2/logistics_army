@php $active = 'storage' @endphp
@extends('layouts.main')
@section('title','storage')
@section('content') 


<div class="row"> 
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row"> 

                    <div class="col-10">
                        <h4>
                            Storage 
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href='/create.form.storage' class="btn btn-dark pull-right">Create</a>
                    </div> 
                    <div class="col-12">
                        <hr>    
                    </div>
                    <div class="col-8"></div>
                    <div class="col-4 text-end"> 
                        <input type="text" class="form-control" placeholder="Search">
                    </div> 
                    <div class="col-12 mt-3" >
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Building</th>
                                    <th scope="col">Floor</th>
                                    <th scope="col">Room</th>
                                    <th scope="col">Cabinet</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $x)
                                    <tr> 
                                        <th scope="row">{{ $x->name }}</th>  
                                        <th scope="row">{{ $x->building}}</th> 
                                        <th scope="row">{{ $x->floor }}</th> 
                                         <th scope="row">{{ $x->room }}</th> 
                                        <th scope="row">{{ $x->cabinet }}</th> 
                                        <th scope="row">
                                        <a href="{{ URL::route('update.storage', $x->id) }}" class="btn btn-dark btn">update</a>
                                        <a href="{{ URL::route('storage_delete', $x->id) }}" class="btn btn-dark btn">delete</a>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 

</div>  

@endsection
  