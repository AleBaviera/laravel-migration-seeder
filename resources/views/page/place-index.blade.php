@extends('page.welcome')

@section('content')
<div class="container">

  <a href="{{ route('placeCreate') }}">ADD</a>

    <?php foreach ($places as $place): ?>
      <div class="box place">
      <p>{{$place -> name}}</p>
      <p>{{$place -> address}}</p>
      </div>
    <?php endforeach; ?>

</div>
@endsection
