@extends ('layouts.app')
@section('content')
<h1>TABLE DES vignette</h1>
<table class="table">
  <thead>
    
  </thead>
  <tbody>
    @foreach ($Vignettes as $vignette )
    <tr>
      <th scope="row">{{$vignette -> id}}</th>
      <td>{{$vignette -> Legende}}</td>
      <img src="{{$vignette->Url}}" alt="{{$vignette-> Description}}">
      <p>{{$vignette->Description}}</p>
      <p>{{$vignette->statut}}</p>
    </tr>
    @endforeach

  </tbody>
</table>
</body>

@endsection