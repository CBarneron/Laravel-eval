@extends('layouts.app')
@section('content')
{{-- <div>
    <tr>
        <th scope="row">{{$vignette -> id}}</th>
        <td>{{$vignette -> Legende}}</td>
        <td><img src="{{$vignette->Url}}" alt="{{$vignette-> Description}}"></td>
        <td><p>{{$vignette->Description}}</p></td>
        <td><p>{{$vignette->Statut}}</p></th>
    </tr>
</div> --}}
<div class="card" style="width: 18rem;">
    <img src="{{$vignette->Url}}" alt="{{$vignette-> Description}}" class="card-img-top" >
    <div class="card-body">
      <h5 class="card-title">{{$vignette -> Legende}}</h5>
      <p class="card-text">{{$vignette->Description}}</p>  
      <p class="card-text">{{$vignette->Statut}}</p>    
    </div>
  </div>


@endsection()