@php $active = 'create_form.return' @endphp
@extends('layouts.main')
@section('title','create_form.return')
@section('content')
    
<div class="row"> 
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row"> 

                    <div class="col-10">
                        <h4>
                            Returned Products
                        </h4>
                    </div>
                    
                    <div class="col-12">
                        <hr>    
                    </div>

                   

                    <div class="col-12">
                       <form action="{{ URL::route('create.save')}}" method="post">
                         @csrf
                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Asset ID</label>
                              <input type="text" class="form-control" name="asset_id">
                            </div> <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Returned By</label>
                              <input type="text" class="form-control" name="returend_by">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Contact</label>
                                <input type="number" class="form-control" name="returend_by_contact">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Quantity</label>
                                <input type="number" class="form-control" name="quantity">
                              <div class="col-12">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Reason</label>
                                <input type="textarea" class="form-control" name="reason">
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