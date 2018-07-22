@foreach($tqrcodes as $cat)
<h5>{{ $cat->label }}</h5>

<?php $ligne = json_decode($cat->structure, true); ?>

@foreach($ligne as $l) 
    <input type="" name="{{ collect($l)['name'] }}">
            
        @endforeach
@endforeach