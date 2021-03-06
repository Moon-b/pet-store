@extends('welcome')
@section('content')
<div class="row" style="margin-top: 75px;">
<a href="{{route('petcategory.create')}}" class="btn btn-success" style="float: right;"><h2>Add New Pet</h2></a>

  <div class="col-12">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">pet_categories_name</th>
      <th scope="col">details</th>
      <th scope="col">action</th>
       <th scope="col"></th>  
    </tr>
  </thead>
  <tbody>
    @foreach($petcategories as $singlepetcategory)
      <tr>
        <td>{{$singlepetcategory->id}}</td>
         <td>{{$singlepetcategory->pet_categories_name}}</td>
        <td>{{$singlepetcategory->details}}</td>
        <td>
        <a  href="">Edit</a>  
        </td>
        <td>
        <a  href="">Delete</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>

@endsection


