@extends('welcome')
@section('content')
<form action="{{route('pet.post' )}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">pet_name</label>
    <input name ='pet_name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_name">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">pet_breed</label>
    <input name ='pet_breed' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_breed">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">pet_size</label>
    <input name ='pet_size' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_size">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">pet_color</label>
    <input name ='pet_color' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_color">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">pet_life_span</label>
    <input name ='pet_life_span' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_life_span">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">pet_age</label>
    <input name ='pet_age' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_age">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">pet_height</label>
    <input name ='pet_height' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_height">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">rules</label>
    <input name ='rules' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter rules">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">pet_weight</label>
    <input name ='pet_weight' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_weight">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">pet_health</label>
    <input name ='pet_health' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_health">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">pet_quality</label>
    <input name ='pet_quality' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_quality">
 
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection