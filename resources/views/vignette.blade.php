@extends ('layouts.app')
@section('content')
<h1>Table des vignettes</h1>
<a class ="btn btn-danger" href="{{route('vignette.create')}}">CREATE</a>
  <section>
    <div class="row">
    @foreach ($Vignettes as $vignette )
   
    <div class="card col-md-4 col-sm-4 m-2" style="width:18rem;" >
      <div class="card-header">
        {{$vignette -> Legende}}
      </div>
      <img src="{{$vignette->Url}}" alt="{{$vignette-> Description}}" class="card-img-top" >
      <div class="card-body">
        
        <p class="card-text">{{$vignette->Description}}</p>  
        <p class="card-text">{{$vignette->Statut}}</p>    
        <div>
          <a class ="btn btn-primary" href="{{route('vignette.show',$vignette->id)}}">Show</a>
          <a class ="btn btn-warning" href="{{route('vignette.edit',$vignette->id)}}">UPTADE</a>
          <form action="{{ route('vignette.destroy',$vignette->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" name='destroy' class ="btn btn-danger"  >DELETE
          </form>
      </div>
    </div>
        
    </div>
    @endforeach
  </div>
  </section>

</body>

@endsection