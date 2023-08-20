@foreach ($ocene as $ucenikoveOcene)
<h4>{{$ucenikoveOcene->profesor}}</h4>
<h5>{{$ucenikoveOcene->predmet}}</h5>
<p>{{$ucenikoveOcene->ocena}}</p>
    
@endforeach