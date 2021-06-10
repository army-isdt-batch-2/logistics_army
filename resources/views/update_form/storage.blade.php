@php $active = 'update.form.storage' @endphp
@extends('layouts.main')
@section('title','update.form.storage')
@section('content')
    
<div class="container">
    <div class="row p-5">
        <div class="col-10">
            <h1>Update Storage</h1>
        </div>
        <div class="col-2">
            <a href="/" class="btn btn-dark">Cancel</a>
        </div>
        <div class="col-12 mt-5">
            <form action="{{ URL::route('update.save' , $data->id)}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{  $data->name }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="text" class="form-control" name="building" value="{{  $data->building }}"required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="text" class="form-control" name="floor" value="{{  $data->floor}}"required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control" name="room"value="{{  $data->room }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Seller Name</label>
                    <input type="text" class="form-control" name="cabinet" value="{{  $data->cabinet}}"required>
                </div>
                <div class="mb-3">
                    <button class="btn btn-dark">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
  
@endsection