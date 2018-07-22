@extends('layouts.app')

@section('content')

<h5>{{ $tqrcodes->title }}</h5>

     <?php $ligne = json_decode($tqrcodes->structure, true); ?>

     @foreach($ligne as $l)
     <label>{{ collect($l)['label'] }}</label> 
    <input type="text" name=""> <br>
            
        @endforeach

        <a href="/type-qrcode/{{$tqrcodes->id}}">go to</a>





@endsection