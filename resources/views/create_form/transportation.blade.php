@php $active = 'create_form.transportation' @endphp
@extends('layouts.main')
@section('title','create_form.transportation')
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
                    
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-12">
                       <form action="{{ URL::route('save.create.transportation') }}" method="post">
                         @csrf
                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Plate Number</label>
                              <input type="text" class="form-control" name="plate_number">
                            </div> <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Driver Name</label>
                              <input type="text" class="form-control" name="driver_name">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Driver Contact</label>
                                <input type="number" class="form-control" name="driver_contact">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Notes</label>
                                <input type="textarea" class="form-control" name="notes">
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