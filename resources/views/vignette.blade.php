@extends ('layouts.app')
@section('content')
<h1>TABLE DES vignette</h1>
<a class ="btn btn-danger" href="{{route('vignette.create')}}">CREATE</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">vignette</th>
      <th scope="col">Show</th>
      <th scope="col">EDIT</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($Vignettes as $vignette )
    <tr>
      <th scope="row">{{$vignette -> id}}</th>
      <td>{{$vignette -> Legende}}</td>
      <td><a class ="btn btn-primary" href="{{route('vignette.show',$vignette->id)}}">Show</a></td>
      <td><a class ="btn btn-warning" href="{{route('vignette.edit',$vignette->id)}}">UPTADE</a></td>
      <td>
        <form action="{{ route('vignette.destroy',$vignette->id)}}" method="post">
          @csrf
          @method('DELETE')
        <button type="submit" name='destroy' class ="btn btn-danger"  >DELETE</form></td>
    </tr>
    @endforeach

  </tbody>
</table>
</body>

@endsection