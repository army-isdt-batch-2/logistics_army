@php $active = 'transportation' @endphp
@extends('layouts.main')
@section('title','transportation')
@section('content') 


<div class="row"> 
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row"> 

                    <div class="col-10">
                        <h4>
                            Transportation 
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href='/create.form.transportation' class="btn btn-dark pull-right">Create</a>
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
                                    <th scope="col">Plate Number</th>
                                    <th scope="col">Driver Name</th>
                                    <th scope="col">Driver Contact</th>
                                    <th scope="col">Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($data as $x)
                                    <tr> 
                                        <th scope="row">{{ $x->plate_number }}</th>  
                                        <th scope="row">{{ $x->driver_name}}</th> 
                                        <th scope="row">{{ $x->driver_contact }}</th> 
                                         <th scope="row">{{ $x->notes }}</th> 
                                        <th scope="row">
                                        <a href="" class="btn btn-dark btn">update</a>
                                        <a href="" class="btn btn-dark btn">delete</a>
                                        </th>
                                    </tr>
                                @endforeach
                                </tr> 
                            </tbody>
                        </table>
                        </table>
                    </div>
                </div>
            </div>
        </div> 

</div>  

@endsection
  