@extends ('layouts.app')
@section('content')
<h1>Table des vignette</h1>

<section>
  <div class="row">
    @foreach ($Vignettes as $vignette )
 
  <div class="card col-md-4 col-sm-4 m-2" style="width:18rem;" >
    <div class="card-header">
      {{$vignette -> Legende}} - {{$vignette -> id}}
    </div>
    <img src="{{$vignette->Url}}" alt="{{$vignette-> Description}}" class="card-img-top" >
    <div class="card-body">
      
      <p class="card-text text-center">{{$vignette->Description}}</p>  
      <p class="card-text">{{$vignette->Statut}}</p>    
      
  </div>
      
  </div>
  @endforeach
</div>
</section>

</body>

@endsection