@php $active = 'create_form.distribution' @endphp
@extends('layouts.main')
@section('title','create_form.distribution')
@section('content')
    
<div class="row"> 
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row"> 

                    <div class="col-10">
                        <h4>
                            Distribution
                        </h4>
                    </div>
                    
                    <div class="col-12">
                        <hr>    
                    </div>

                   

                    <div class="col-12">
                       <form action="#" method="post">
                         @csrf
                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Requestor Name</label>
                              <input type="text" class="form-control" name="requestor_name" >
                            </div> <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Requestor Contact</label>
                              <input type="number" class="form-control" name="requestor_contact">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Purpose</label>
                                <input type="number" class="form-control" name="purpose">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Asset ID</label>
                                <input type="textarea" class="form-control" name="asset_id" >
                              <div class="col-12">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Quantity</label>
                                <input type="textarea" class="form-control" name="quantity" >
                              <div class="col-12">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Status</label>
                                <input type="textarea" class="form-control" name="status" >
                              <div class="col-12">
                              <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div> 

</div>  
  
@endsection