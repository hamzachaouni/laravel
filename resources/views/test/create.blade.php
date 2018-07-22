@extends('layouts.app')

@section('content')

				<form action="{{ url('type-qrcode') }}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer title">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">description</label>
    <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer description">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">structure</label>
    <input type="text" name="structure" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer structure">
  </div>

 

  

  

  <div class="form-group">
  	<button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
</form>
			
@endsection