@extends('layouts.main')

@section('content')
<div class="container">
@foreach ($movies as $movie )

    <div class="card d-inline-flex my-2" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $movie->title }}</h5>
        <h5 class="card-title">{{ $movie->original_title }}</h5>
        <h5 class="card-title">{{ $movie->date }}</h5>
    </div>
    </div>
    
@endforeach

</div>
@endsection