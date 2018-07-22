@extends('layouts.admin-app')

@section('content')
<div class="container create-tqrcode">
	<div class="row">
		
		<div class="col-md-8 contenu-left">
			<div class="form">
				<form action="{{ url('admin/type-qrcode') }}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea placeholder="Description" name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail9">Short Title</label>
    <input type="text" name="shorttitle" class="form-control" id="exampleInputEmail9" aria-describedby="emailHelp" placeholder="Entrer Short Title">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail9">Stext</label>
    <input type="text" name="text" class="form-control" id="exampleInputEmail9" aria-describedby="emailHelp" placeholder="Entrer text">
  </div>

  <div class="row">
  	<div class="col-md-4">
  		<div class="form-group form-check">
    <input name="recomended" value="recomended" type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Recomended</label>
  </div>

  <div class="form-group form-check">
    <input name="promotion" value="promotion" type="checkbox" class="form-check-input" id="exampleCheck2">
    <label class="form-check-label" for="exampleCheck2">Promotion</label>
  </div>
  	</div>
  	<div class="col-md-4">
  		<div class="form-group form-check">
    <input name="social" value="social" type="checkbox" class="form-check-input" id="exampleCheck3">
    <label class="form-check-label" for="exampleCheck3">Social</label>
  </div>

  <div class="form-group form-check">
    <input name="product" value="product" type="checkbox" class="form-check-input" id="exampleCheck4">
    <label class="form-check-label" for="exampleCheck4">Product/Service</label>
  </div>
  	</div>
  	<div class="col-md-4">
  		<div class="form-group form-check">
    <input name="business" value="business" type="checkbox" class="form-check-input" id="exampleCheck5">
    <label class="form-check-label" for="exampleCheck5">Business</label>
  </div>

  <div class="form-group form-check">
    <input name="personal" value="personal" type="checkbox" class="form-check-input" id="exampleCheck6">
    <label class="form-check-label" for="exampleCheck6">Presonal</label>
  </div>
  	</div>
  </div>
  <div class="upload-btn-wrapper">
        <button class="btn btnimage">Upload a file</button>
        <input type="file" name="photo" />
        <span>248x450</span>
    </div>

  

  

  <div class="form-group">
  	<button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
</form>
			</div>
		</div>
		<div class="col-md-4 contenu-right">
			<div class="card-img">
				<div class="card-img-title">
					<h2> <i class="fas fa-qrcode"></i> Type Qrcode</h2>
					
				</div>
				<div class="card-img-contenu">
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
					</p>
				</div>
			</div>
		</div>

	</div>
</div>

<?php $a = "hamza"; ?>

{{$a}}
@endsection