@php $active = 'create.form.storage' @endphp
@extends('layouts.main')
@section('title','create.form.storage')
@section('content')
    
<div class="row"> 
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row"> 

                    <div class="col-10">
                        <h4>
                            Create Storage
                        </h4>
                    </div>
                    
                    <div class="col-12">
                        <hr>    
                    </div>

                   

                    <div class="col-12">
                       <form action="{{URL::route('save.create.storage')}}" method="post">
                         @csrf
                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Name</label>
                              <input type="text" class="form-control" name="name">
                            </div> <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Building</label>
                              <input type="number" class="form-control" name="building">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Floor</label>
                                <input type="number" class="form-control" name="floor">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Room</label>
                                <input type="number" class="form-control" name="room">
                              <div class="col-12">
                            </div> <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Cabinet</label>
                                <input type="textarea" class="form-control" name="cabinet">
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