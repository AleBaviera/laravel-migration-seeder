@extends('page.welcome')

@section('content')
<div class="container">

    <?php foreach ($places as $place): ?>
      <div class="box place">
      <p>{{$place -> name}}</p>
      <p>{{$place -> address}}</p>
      </div>
    <?php endforeach; ?>

</div>
@endsection
