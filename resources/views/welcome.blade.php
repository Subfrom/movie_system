@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">หนังทั้งหมด</h1>
          <div class="box">
            @foreach ($movies as $movie)
              <a href="{{ url('/movie/' . $movie->movie_id) }}"><img src="{{ asset('/storage/'.$movie->movie_image) }}" alt=""></a>
            @endforeach        
          </div>
      </div>
     
    <!-- END OF MAIN CONTAINER -->
  </div>
</div>
@endsection
