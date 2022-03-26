@extends('welcome')
@section('content')
<form action="{{route('petcategory.store')}}" method="POST"enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">pet_categories_name</label>
    <input name ='pet_categories_name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_categories_name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">details</label>
    <input name ='details' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter details">
  
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection