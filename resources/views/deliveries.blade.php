@php $active = 'deliveries' @endphp
@extends('layouts.main')
@section('title','deliveries')
@section('content') 


<div class="row"> 
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row"> 

                    <div class="col-10">
                        <h4>
                            Deliveries 
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href='/create.form.deliveries' class="btn btn-dark pull-right">Create</a>
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
                                    <th scope="col">Distribution ID</th>
                                    <th scope="col">Transportation ID</th>
                                    <th scope="col">Date distributed</th>
                                    <th scope="col">Status</th>



                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($data as $x)
                                        <tr> 
                                        <th scope="row">{{ $x->distribution_id }}</th>  
                                        <th scope="row">{{ $x->transportation_id}}</th> 
                                        <th scope="row">{{ $x->date_distributed }}</th> 
                                         <th scope="row">{{ $x->status }}</th> 
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
  
