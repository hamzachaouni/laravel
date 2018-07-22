@extends('layouts.app')

@section('content')
@foreach($tqrcodes as $cat)
<h5>{{ $cat->title }}</h5>

     <?php $ligne = json_decode($cat->structure, true); ?>

     @foreach($ligne as $l)
     <label>{{ collect($l)['label'] }}</label> 
    <input type="text" name=""> <br>
            
        @endforeach

        <a href="/type-qrcode/{{$cat->id}}">go to</a>



@endforeach

@endsection