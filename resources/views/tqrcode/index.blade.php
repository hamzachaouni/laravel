@extends('layouts.admin-app')

@section('content')
<div class="container index-tqrcode">
	<div class="row">
		<div class=" contenu-top ">
			<span><i class="fas fa-qrcode"></i></span>
			<span class="title">Qr Code</span>
			<a href="{{ url('admin/type-qrcode/create') }}" class="btn btn-primary">Add New <i class="fas fa-plus"></i> </a>
		</div>
		<div class="col-md-12 table">
			<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">shorttitle</th>
      <th scope="col">Image</th>
      <th scope="col">Recomended</th>
      <th scope="col">Promotion</th>
      <th scope="col">Social</th>
      <th scope="col">Product</th>
      <th scope="col">Business</th>
      <th scope="col">Personal</th>
      <th scope="col">text</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  	@foreach($tqrcodes as $qr)
    <tr>
      <th scope="row">1</th>
      <td>{{ $qr->title }}</td>
      <td>{{ $qr->description }}</td>
      <td>{{ $qr->shorttitle }}</td>
      <td><img src="{{ asset('storage/'.$qr->photo) }}" width="40px" height="40px"></td>
      <td class="text-center">@if($qr->recomended == 'recomended') <i class="far fa-check-circle"></i> @else <i class="far fa-times-circle"></i> @endif</td>
      <td class="text-center">@if($qr->promotion == 'promotion') <i class="far fa-check-circle"></i>  @else <i class="far fa-times-circle"></i> @endif</td>
      <td class="text-center">@if($qr->social == 'social') <i class="far fa-check-circle"></i>  @else <i class="far fa-times-circle"></i> @endif</td>
      <td class="text-center">@if($qr->product == 'product') <i class="far fa-check-circle"></i> @else <i class="far fa-times-circle"></i> @endif</td>
      <td class="text-center">@if($qr->business == 'business') <i class="far fa-check-circle"></i> @else <i class="far fa-times-circle"></i> @endif</td>
      <td class="text-center">@if($qr->personal == 'personal') <i class="far fa-check-circle"></i> @else <i class="far fa-times-circle"></i> @endif</td>
      <?php $ligne = json_decode($qr->text, true); ?>

    
      <td class="text-center">
         @foreach($ligne as $l)
     <p>{{ collect($l)['label'] }}</p> 
            
        @endforeach
      </td>
      <td>
      	<a href="{{ url('admin/type-qrcode/'.$qr->id.'/edit') }}" class="btn btn-primary edit"> <i class="fas fa-edit"></i> Edit</a>
      </td>
      <td>
        <form action="{{ url('admin/type-qrcode/'.$qr->id) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <button type="submit" class="btn btn-primary delete"> <i class="fas fa-trash-alt"></i> Delete</button>
          
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


		</div>
	</div>
</div>
@endsection