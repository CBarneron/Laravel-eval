@extends ('layouts.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif 
<h1>Créer une destination</h1>
<form method="POST" action="{{ route('vignette.store')}}">
    @csrf
    @method('PUT')

    <div class="mb-3">
    <label for="Legende" class="form-label">Legende</label>
    <input type="text" name='Legende' class="form-control" id="ville" aria-describedby="emailHelp">
    
    </div>
    <div class="mb-3">
    <label for="Url" class="form-label">Url</label>
    <input type="text" name='Url' class="form-control" id="Url">
    </div>
    <div class="mb-3">
        <label for="Description" class="form-label">Description</label>
        <input type="text" name='tour' class="form-control" id="Description">
    </div>
    <div class="mb-3">
            <label for="Statut" class="form-label">Statut</label>
            <input type="number"name='place' class="form-control" id="Statut">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection