@php $active = 'create_form.deliveries' @endphp
@extends('layouts.main')
@section('title','create_form.deliveries')
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
                    
                    <div class="col-12">
                        <hr>    
                    </div>

                   

                    <div class="col-12">
                       <form action="{{ URL::route('save.create.deliveries')}}" method="post">
                         @csrf
                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Distributed ID</label>
                              <input type="text" class="form-control" name="distribution_id">
                            </div> <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Transportation ID</label>
                              <input type="number" class="form-control" name="transportation_id" >
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Date Distributed</label>
                                <input type="date" class="form-control" name="date_distributed">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Status</label>
                                <input type="text" class="form-control" name="status" >
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