@php $active = 'create.form.assets' @endphp
@extends('layouts.main')
@section('title','create.form.assets')
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
                    
                    <div class="col-12">
                        <hr>    
                    </div>

                   

                    <div class="col-12">
                       <form action="" method="post">
                         @csrf
                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Name</label>
                              <input type="text" class="form-control" name="name">
                            </div> <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Description</label>
                              <input type="number" class="form-control" name="description">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Category</label>
                                <input type="number" class="form-control" name="category">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Supplier ID</label>
                                <input type="textarea" class="form-control" name="supplier_id">
                              <div class="col-12">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Storage ID</label>
                                <input type="textarea" class="form-control" name="storage_id">
                              <div class="col-12">      
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Total Stocks</label>
                                <input type="textarea" class="form-control" name="total_stocks">
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