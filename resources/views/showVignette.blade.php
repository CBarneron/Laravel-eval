@extends('layouts.app')
@section('content')
<div>
    <tr>
        <th scope="row">{{$vignette -> id}}</th>
        <td>{{$vignette -> Legende}}</td>
        <img src="{{$vignette->Url}}" alt="{{$vignette-> Description}}">
        <p>{{$vignette->Description}}</p>
        <p>{{$vignette->Statut}}</p>
    </tr>
</div>


@endsection()