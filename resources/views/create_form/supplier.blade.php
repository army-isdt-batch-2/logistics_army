@php $active = 'create.form.supplier' @endphp
@extends('layouts.main')
@section('title','create.form.supplier')
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
                    
                    <div class="col-12">
                        <hr>    
                    </div>

                   

                    <div class="col-12">
                       <form action="#" method="post">
                         @csrf
                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Name</label>
                              <input type="text" class="form-control" id="inputEmail4">
                            </div> <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Contact Number</label>
                              <input type="number" class="form-control" id="inputEmail4">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Address</label>
                                <input type="text" class="form-control" id="inputEmail4">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Contact Person</label>
                                <input type="text" class="form-control" id="inputEmail4">
                              <div class="col-12">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Category</label>
                                <input type="textarea" class="form-control" id="inputEmail4">
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