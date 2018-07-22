@extends('layouts.app')

@section('content')
@foreach($tqrcodes as $cat)
<h5>{{ $cat->title }}</h5>


        <a href="/type-qrcode/{{$cat->id}}">go to</a>

<hr>

@endforeach

@endsection